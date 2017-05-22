<?php

namespace App\Http\Controllers\EmployerAuth;

use Mail;
use Session;
use Validator;
use App\Employer;
use App\Emprofile;
use App\Mail\VerifyEmailEmployer;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;

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
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/employer/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('employer.guest');
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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:employers',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new employer instance after a valid registration.
     *
     * @param  array  $data
     * @return Employer
     */
    protected function create(array $data)
    {
        $employer = Employer::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'verifyToken' => Str::random(50),
        ]);

        $thisEmployer = Employer::findOrFail($employer->id);

        $this->createProile($thisEmployer);

        $this->sendEmailEmployer($thisEmployer);

        Session::flash('status','Heads up! Check your email and confirm your registration!');

        return $employer;         
    }

    protected function createProile($thisEmployer)
    {
        Emprofile::create([
            'employer_id' => $thisEmployer->id,
            'email' => $thisEmployer->email,
        ]);
    }    

    public function sendEmailEmployer($thisEmployer)
    {

        Mail::to($thisEmployer)->send(new VerifyEmailEmployer($thisEmployer));

    }


    public function verifyEmployer($email,$verifyToken)
    {

        $employer = Employer::where(['email' => $email, 'verifyToken' => $verifyToken])->first();

        if ($employer) {
            
            Employer::where(['email' => $email, 'verifyToken' => $verifyToken])->update(['status' => '1', 'verifyToken' => NULL]);

            Session::flash('confirm','Well done! You successfully registered.');

            return redirect(route('employer.login'));


        } else {

            Session::flash('error','Oppos! You already registered.');

            return redirect(route('employer.login'));

        }

    }        

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('employer.auth.register');
    }


     /**
     * Handle a registration request for the application Employer.
     *
     * @return \Illuminate\Http\Response
     */   
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        return redirect(route('employer.login'));

    }



    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('employer');
    }
}
