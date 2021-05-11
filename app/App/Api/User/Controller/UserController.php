<?php
namespace App\Api\User\Controller;

use App\Core\Http\Controllers\Controller;
use Domain\User\Models\User;

class UserController extends Controller
{

    public function index()
    {
        dd(User::with('card')->get());
    }

}