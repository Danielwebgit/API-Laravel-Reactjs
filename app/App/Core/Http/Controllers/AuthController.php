<?php
namespace App\Core\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        dd($request->all());
    }


}