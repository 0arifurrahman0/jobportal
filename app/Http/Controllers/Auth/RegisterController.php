<?php

namespace App\Http\Controllers\Auth;

use Mail;
use Session;
use App\User;
use App\Profile;
use App\Mail\VerifyEmail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/login';

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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    } 

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'verifyToken' => Str::random(50),
        ]);

        $thisUser = User::findOrFail($user->id);

        $this->createProile($thisUser);

        $this->sendEmail($thisUser);

        Session::flash('status','Heads up! Check your email and confirm your registration!');

        return $user;        
    }

    protected function createProile($thisUser)
    {
        Profile::create([
            'user_id' => $thisUser->id,
            'seEmail' => $thisUser->email,
        ]);
    }

    public function sendEmail($thisUser)
    {

        Mail::to($thisUser)->send(new VerifyEmail($thisUser));

    }

    public function verifyEmail($email,$verifyToken)
    {

        $user = User::where(['email' => $email, 'verifyToken' => $verifyToken])->first();

        if ($user) {
            
            User::where(['email' => $email, 'verifyToken' => $verifyToken])->update(['status' => '1', 'verifyToken' => NULL]);

            Session::flash('confirm','Well done! You successfully registered.');

            return redirect(route('login'));


        } else {

            Session::flash('error','Oppos! You already registered.');

            return redirect(route('login'));

        }

    }    


    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('auth.register');
    }


    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        return redirect(route('login'));

    } 

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('web');
    }     


}
