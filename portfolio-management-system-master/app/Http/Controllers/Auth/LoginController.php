<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }
    public function logout() {
        Auth::logout();
        return redirect('/');
      }
      public function login(Request $request){
        //validate data
        $password = $request['password'];
        $email = $request['email'];
        $this->validate($request, [
            'email'           => 'required|max:255|email',
            'password'           => 'required|min:8',
        ]);

        $password = $request['password'];
        $email = $request['email'];

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // Success
            return redirect()->intended('/admin');
        } else {
            // Go back on error (or do what you want)
            return redirect()->intended('/login')->with('error' , 'Wrong username or password');
        }




        
        }
        
    }
      

