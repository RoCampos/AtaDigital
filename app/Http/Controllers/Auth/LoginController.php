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
        if (Auth::attempt ($credenciais)) {

            $user = User::get()
                ->where('email',$credenciais['email'])
                ->first();

            if (isset($user)) {

                if ($user->type == "professor") {
                    return redirect()->to(
                        route('professor.inicio', 
                            ['id' => $user->id]));

                }else if($user->type == "aluno"){
                    return redirect()->to(
                        route('aluno.inicio', 
                            ['id' => $user->id]));
                }
            }

        } else {
            return redirect()->to('login');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->flush();
        return redirect(\URL::previous());
    }

}
