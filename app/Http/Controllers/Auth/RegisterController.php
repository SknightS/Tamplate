<?php

namespace App\Http\Controllers\Auth;

use App\Employer;
use App\User;
use App\Candidate;
use App\Company;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Mail;

use Session;

use Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'userType' => 'required|string|min:3',
        ]);


    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
//    protected function create(array $data)
//    {
//        return User::create([
//            'name' => $data['name'],
//            'email' => $data['email'],
//            'password' => bcrypt($data['password']),
//        ]);
//    }
    protected function AccountCreation(Request $r)
    {
        $validatedData = $r->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100|unique:user,email',
            'password' => 'required|string|min:6|confirmed',
            'userType' => 'required|string|max:5',
        ]);


        $user=new User();
        $user->fkuserTypeId=$r->userType;
        $user->email=$r->email;
        $user->password=bcrypt($r->password);

        $user->active='0';
        $user->save();


        $data = array('name'=>$r->name,'email'=>$r->email,'userId'=>$user->id,'pass'=>$r->password);
        try {
            Mail::send('mail.AccountCreate', $data, function ($message) use ($data) {
                $message->to($data['email'], 'STAFF NETWORK')->subject('New - Account');
                //$message->from('support@staffnetwork.com','STAFF NETWORK');
            });
            Session::flash('success_msg', 'Account Activation Mail is sent to your mail');

        }catch (\Exception $ex) {

          //  echo "HTML Email Does not Sent. Check your inbox.";

            Session::flash('error_msg', 'Account Activation Email Does not Sent.Please contact us');

        }
        return redirect()->route('home');
        //echo "HTML Email Sent. Check your inbox.";

    }
    public function AccountActive(Request $r)
    {

        $ActiveInfo = User::findOrFail($r->userId);
        $ActiveInfo->active = '1';
        $ActiveInfo->save();


        if ($ActiveInfo->fkuserTypeId == UserType['emp']['code']) {

            $candidate = new Candidate();

            $candidate->email = $ActiveInfo->email;
            $candidate->name = $r->name;
            $candidate->fkuserId = $ActiveInfo->id;

            $candidate->save();
            Auth::loginUsingId($r->userId);

            return redirect()->route('employee');
        }
        elseif ($ActiveInfo->fkuserTypeId == UserType['empr']['code']) {



            $company=new Company();

            $company->companyLoginId=$ActiveInfo->email;
//            $company->companyName=$r->name;
            $company->fkuserId=$ActiveInfo->id;

            $company->save();
            Auth::loginUsingId($r->userId);

            return redirect()->route('employer.dashboard');
        }

    }
}
