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
    protected $redirectTo = '/home';

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
        Mail::send('mail.AccountCreate', $data, function($message) use($data) {
            $message->to($data['email'], 'STAFF NETWORK')->subject
            ('New - Account');
            $message->from('support@staffnetwork.com','STAFF NETWORK');
        });
        echo "HTML Email Sent. Check your inbox.";

    }
    protected function AccountActive(Request $r)
    {

        $ActiveInfo = User::findOrFail($r->userId);
        $ActiveInfo->active='1';
        $ActiveInfo->save();

        $user=array('email'=>$r->userEmail,'password'=>$r->userPass);

        Auth::login($user);


    }
}
