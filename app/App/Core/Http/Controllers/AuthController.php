<?php
namespace App\Core\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Object_;

class AuthController extends Controller
{

    public function dashboard()
    {
        if (Auth::check()){

            return view('admin.dashboard');
        }

        return redirect()->route('admin.login');
    }

    public function showLoginForm()
    {
        return view('admin.formLogin');
    }

    public function login(Request $request)
    {

        $credentials=[
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($credentials)){
            return redirect()->route('admin');
        }
        return redirect()->back()->withInput()->withErrors('Os dados informados não conferem');

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin');
    }


}