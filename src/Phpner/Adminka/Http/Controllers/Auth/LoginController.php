<?php
namespace Phpner\Adminka\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

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

    public function showLoginForm()
    {
        if (Auth::check())
            return redirect()->back();

        return view('phpner::views\auth\login');
    }

    public function login(Request $request)
    {

        $remember = $request->has("remember");

       $or =  Auth::attempt(
        [
            'email' => $request['email'],
            'password' => $request['password']
        ],
           $remember
        );

        if($or)
            return redirect('/admin');
                return redirect()->back()->withInput($request->only('email','remember'))->withErrors(['email' => 'Ошибка Email или пароль !']);

    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
