<?php

namespace App\Http\Controllers;
use App\Companybranch;
use App\Company;
use App\Address;

use Illuminate\Http\Request;


class CompanyController extends Controller
{

    public function __construct()
    {

    }

    public function showAllCompany() //return all companies with branch
    {
        $allCompaniesWithBranch= Companybranch::select('company.companyId','company.image','company_branch.name as branchName','company_branch.address_addressId',
                                'company_branch.phone','company_branch.email','address.addresscol','master_subarb.name as city',
                                'master_state.name as state')
                        ->leftJoin('company', 'company_branch.company_companyId', '=', 'company.companyId')
                        ->leftJoin('address', 'address.addressId', '=', 'company_branch.address_addressId')
                        ->leftJoin('master_subarb', 'master_subarb.id', '=', 'address.master_subarb_id')
                        ->leftJoin('master_state', 'master_state.id', '=', 'master_subarb.master_state_id')
                        ->get();


        return view('layouts.showAllCompany',compact('allCompaniesWithBranch'));


    }
    public function showCompanydetails($id) // retun selected company details
    {
        $companyDetails = Company::leftJoin('company_branch', 'company_branch.company_companyId', '=', 'company.companyId')->findOrFail($id);

        if ($companyDetails->address_addressId != null){

            $companyAddress=Address::select('address.addresscol','master_subarb.name as city','master_state.name as state')
                ->leftJoin('master_subarb', 'master_subarb.id', '=', 'address.master_subarb_id')
                ->leftJoin('master_state', 'master_state.id', '=', 'master_subarb.master_state_id')
                ->where('addressId',$companyDetails->address_addressId)

                ->get();

        }else{
            $companyAddress=null;

        }


        return view('layouts.showCompanyDetails',compact('companyDetails','companyAddress'));


    }

}