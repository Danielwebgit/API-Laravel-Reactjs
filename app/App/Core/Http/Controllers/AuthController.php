<?php
namespace App\Core\Http\Controllers;

use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{

    public function dashboard()
    {
        if (Auth::check()){
            return view('admin.dashboard');
        }
    }

    public function showLoginForm()
    {
        return "cac";
    }


}