<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Candidate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Mail;

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
    protected function redirectTo()
    {

        if (Auth::user()->fkuserTypeId == "admin") {
            return '/';
        }
        elseif (Auth::user()->fkuserTypeId == "emp") {
            return route('employee');
        }
        elseif (Auth::user()->fkuserTypeId == "empr") {
            return '/cashier/home';
        }
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

        $user=new User();
        $user->fkuserTypeId=$r->userType;
        $user->email=$r->email;
        $user->password=bcrypt($r->password);

        $user->active='0';
        $user->save();

        $candidate=new Candidate();
        $candidate->email=$r->email;
        $candidate->name=$r->name;
        $candidate->fkuserId=$user->id;
        $candidate->save();

        $data = array('name'=>$r->email,'email'=>$r->email,'userId'=>$user->id,'pass'=>$r->password);
        try {
            Mail::send('mail.AccountCreate', $data, function ($message) use ($data) {
                $message->to($data['email'], 'STAFF NETWORK')->subject
                ('New - Account');
                //$message->from('support@staffnetwork.com','STAFF NETWORK');
            });
        }catch (\Exception $ex) {

            echo "HTML Email Does not Sent. Check your inbox.";
        }
        //echo "HTML Email Sent. Check your inbox.";

    }
    public function AccountActive(Request $r)
    {

        $ActiveInfo = User::findOrFail($r->userId);

//        if ($ActiveInfo->active =='1'){
//
//            echo "<script>aletr('1')</script>";
//            return redirect()->route('employee');
//        }
//        else {


            $ActiveInfo->active = '1';
            $ActiveInfo->save();

            Auth::loginUsingId($r->userId);


            if ($ActiveInfo->fkuserTypeId == "emp") {
                return redirect()->route('employee');
            } elseif ($ActiveInfo->fkuserTypeId == "empr") {
                return redirect()->route('home');
            }
//        }



    }
}
