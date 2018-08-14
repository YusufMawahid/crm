<?php

namespace App\Http\Controllers\Auth;
use Session;
use Illuminate\Http\Request;
use Auth;
use Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use \App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('getLogout');
    }

    public function index()
    {
        return view('auth.login');
    } 

    public function checklogin(Request $r)
    {
      $this->validate($r, [
      'email'   => 'required|email',
      'password'  => 'required|alphaNum|min:2'
     ]);

     $user_data = array(
      'email'  => $r->get('email'),
      'password' => $r->get('password'));

     if(Auth::attempt($user_data))
      {
        return redirect()->intended('/dashboard');
      }
     else
      {
        return back()->with('error', 'Wrong Email or Password');
      }
    }

    public function getLogout()
    {
      Auth::logout();
      return redirect('/');
    }
}
