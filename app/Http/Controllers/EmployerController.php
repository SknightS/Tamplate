<?php

namespace App\Http\Controllers;

use App\Company;
use App\Address;
use App\Companybranch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

use Session;
use Image;

class EmployerController extends Controller
{

    //

    public function __construct()
    {
        $this->middleware(function ($request, $next) {


            if(Auth::check() && Auth::user()->fkuserTypeId=='empr'){

                return $next($request);

            }else{
                Session::flash('message', 'please Login to Account Again .');
                return redirect()->guest(route('loginshow'));
            }


        });
    }


    public function index()
    {

        return view('employer/employerDashboard');
    }

    public function favoriteEmployee()
    {
        return view('employer/favorite-candidates');
    }

    public function myprofile()
    {
        return view('employer/myprofile');
    }

    public function manageJob()
    {
        return view('employer/manage-job');
    }

    public function manageApplication()
    {
        return view('employer/manage-application');

    }

    // show employer Dashboard
    public function showProfile()
    {

         $userId=Auth::user()->id;

        $employerInfo = Company::where('fkuserId', $userId)->first();

        if ($employerInfo->address_addressId !=null){

            $employerAddress=Address::select('address.addresscol','master_subarb.name as city','master_state.name as state')
                ->leftJoin('master_subarb', 'master_subarb.id', '=', 'address.master_subarb_id')
                ->leftJoin('master_state', 'master_state.id', '=', 'master_subarb.master_state_id')
                ->where('addressId',$employerInfo->address_addressId)
                ->get();

        }else{
            $employerAddress=null;

        }

        return view('employer.resume',compact('employerInfo','employerAddress'));


    }

    public function showInforForEdit(Request $r) //show edit modal for employer basic info
    {

        $addressStates = DB::table('master_state')->get();

        if ($r->address !=null){

            $employerAddress=Address::select('address.addresscol','master_subarb.name as city','master_subarb.id as cityId','master_state.name as state','master_state.id as stateId')
                ->leftJoin('master_subarb', 'master_subarb.id', '=', 'address.master_subarb_id')
                ->leftJoin('master_state', 'master_state.id', '=', 'master_subarb.master_state_id')
                ->where('addressId',$r->address)
                ->get();

        }else{
            $employerAddress=null;

        }

        $employerInfo=array(
            'id'=>$r->id,
            'name'=>$r->name,

            'phone'=>$r->phone,
            'email'=>$r->email,
            'address'=>$r->address,
        );

        $object = (object) $employerInfo;


        return view('employer.editEmployerInformation',['employerInfo' => $object,'states'=>$addressStates,'address'=>$employerAddress])->render();

    }

    public function getAllCityByState(Request $r) // show all cities of selected state
    {

        $addressCities = DB::table('master_subarb')->where('master_state_id',$r->stateId)->get();

        if ($addressCities == null) {
            echo "<option value='' selected>Select City</option>";
        } else {
            echo "<option value='' selected>Select City</option>";
            foreach ($addressCities as $city) {
                echo "<option value='$city->id'>$city->name</option>";
            }
        }


    }

    public function EmployerInfoUpdate($employer,Request $r) // employer info update
    {

        $employerInfo=Company::findOrFail($employer);
        $employerInfo->contact_person_name=$r->name;

        $employerInfo->cp_phone=$r->phone;
        $employerInfo->cp_email=$r->email;

        if($r->hasFile('image')){
            $img = $r->file('image');
            $filename= $employer.'profileImage'.'.'.$img->getClientOriginalExtension();
            $employerInfo->image=$filename;
            $location = public_path('employerImages/'.$filename);
            Image::make($img)->save($location);
            $location2 = public_path('employerImages/thumb/'.$filename);
            Image::make($img)->resize(200, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save($location2);
        }



        if ($employerInfo->address_addressId != null) {
            $employeeAddress = Address::findOrFail($employerInfo->address_addressId);
        }else{
            $employeeAddress= new Address();
        }
        $employeeAddress->addresscol=$r->address;
        $employeeAddress->master_subarb_id=$r->cities;

        $employeeAddress->save();

        $employerInfo->address_addressId=$employeeAddress->addressId;
        $employerInfo->save();



        Session::flash('success_msg', 'Your Information Updated Successfully!');
        return back();

    }


    // show employer Company
    public function showMyCompany()
    {

        $userId=Auth::user()->id;

        $employerInfo = Company::where('fkuserId', $userId)->first();


        $employerCompaniesWithBranch= Companybranch::select('company.companyId','company_branch.id as branchId','company_branch.image','company_branch.name as branchName','company_branch.address_addressId',
            'company_branch.phone','company_branch.email','address.addresscol','master_subarb.name as city',
            'master_state.name as state')
            ->leftJoin('company', 'company_branch.company_companyId', '=', 'company.companyId')
            ->leftJoin('address', 'address.addressId', '=', 'company_branch.address_addressId')
            ->leftJoin('master_subarb', 'master_subarb.id', '=', 'address.master_subarb_id')
            ->leftJoin('master_state', 'master_state.id', '=', 'master_subarb.master_state_id')
            ->where('company.fkuserId',$employerInfo->fkuserId)
            ->get();

        //return $employerCompaniesWithBranch;

        return view('employer.companyInfo',compact('employerInfo','employerCompaniesWithBranch'));


    }
    // show employer Company info by id
    public function showMyCompanyInfo(Request $r)
    {

        $companyBranchId=$r->id;

        $addressStates = DB::table('master_state')->get();

        $employerCompaniesWithBranch= Companybranch::select('company.companyId','company_branch.image','company_branch.about','company_branch.name as branchName','company_branch.address_addressId',
            'company_branch.phone','company_branch.email','address.addresscol','master_subarb.id as cityId','master_subarb.name as cityName',
            'master_state.id as state')
            ->leftJoin('company', 'company_branch.company_companyId', '=', 'company.companyId')
            ->leftJoin('address', 'address.addressId', '=', 'company_branch.address_addressId')
            ->leftJoin('master_subarb', 'master_subarb.id', '=', 'address.master_subarb_id')
            ->leftJoin('master_state', 'master_state.id', '=', 'master_subarb.master_state_id')
            ->where('company_branch.id',$companyBranchId)
            ->get();


        return view('employer.editCompanyAllInfo',compact('companyBranchId','employerCompaniesWithBranch','addressStates'));


    }

    public function employerCompanyInfoUpdate($branchId,Request $r) // employer company info update
    {

        $branchInfo=Companybranch::findOrFail($branchId);
        $branchInfo->name=$r->name;
        $branchInfo->phone=$r->phone;
        $branchInfo->email=$r->email;
        $branchInfo->about=$r->about;

        if($r->hasFile('image')){
            $img = $r->file('image');
            $filename= $branchId.'profileImage'.'.'.$img->getClientOriginalExtension();
            $branchInfo->image=$filename;
            $location = public_path('companyImages/'.$filename);
            Image::make($img)->save($location);
            $location2 = public_path('companyImages/thumb/'.$filename);
            Image::make($img)->resize(200, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save($location2);
        }



        if ($branchInfo->address_addressId != null) {
            $branchAddress = Address::findOrFail($branchInfo->address_addressId);
        }else{
            $branchAddress= new Address();
        }
        $branchAddress->addresscol=$r->address;
        $branchAddress->master_subarb_id=$r->cities;

        $branchAddress->save();

        $branchInfo->address_addressId=$branchAddress->addressId;
        $branchInfo->save();



        Session::flash('success_msg', 'Your Information Updated Successfully!');
        return redirect()->route('employer.companyInfo');

    }
    public function employerCompanyInfoaddNew(Request $r) // employer company info update
    {

        $addressStates = DB::table('master_state')->get();

        return view('employer.addCompanyNewInfo',compact('addressStates'));


    }
    public function saveNewEmployerCompanyInfo(Request $r) // employer company info update
    {

        $company=Company::where('fkuserId', '=',Auth::user()->id)->first()->companyId;

        $branchInfo=new Companybranch();
        $branchInfo->name=$r->name;
        $branchInfo->phone=$r->phone;
        $branchInfo->email=$r->email;
        $branchInfo->about=$r->about;

        $branchInfo->company_companyId=$company;

        $branchInfo->save();

        if($r->hasFile('image')){
            $img = $r->file('image');
            $filename= $branchInfo->id.'profileImage'.'.'.$img->getClientOriginalExtension();
            $branchInfo->image=$filename;
            $location = public_path('companyImages/'.$filename);
            Image::make($img)->save($location);
            $location2 = public_path('companyImages/thumb/'.$filename);
            Image::make($img)->resize(200, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save($location2);
        }



        if ($branchInfo->address_addressId != null) {
            $branchAddress = Address::findOrFail($branchInfo->address_addressId);
        }else{
            $branchAddress= new Address();
        }
        $branchAddress->addresscol=$r->address;
        $branchAddress->master_subarb_id=$r->cities;

        $branchAddress->save();

        $branchInfo->address_addressId=$branchAddress->addressId;
        $branchInfo->save();



        Session::flash('success_msg', 'Your Company Added Successfully!');

        return redirect()->route('employer.companyInfo');

    }
}

