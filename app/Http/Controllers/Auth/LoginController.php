<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;


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
    protected $redirectTo = 'login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $credenciais = $request->only('email','password');
        // return $credenciais;
        if (Auth::attempt ($credenciais)) {

            $user = User::get()
                ->where('email',$credenciais['email'])
                ->first();

            if (isset($user)) {

                if ($user->type == "professor")
                    return redirect()->to(
                        route('professor.inicio', 
                            ['id' => $user->id]));
                else {
                    
                    return redirect()->to('login');
                }
            }

        } else {
            return redirect()->to('login');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->to('login');
    }

}
