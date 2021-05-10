<?php

namespace App\Api\Controllers;


use App\Core\Http\Controllers\Controller;

use Domain\User\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function index()
    {
        $tasks = app(User::class)->get();
        return response()->json(User::all());
    }

    public function create()
    {
        User::create([
            'name' => 'luana',
            'email' => 'luana@gmail.com',
            'password' => '013913d9bda9bdbc3ea53381f9d3ab0d'

        ]);
    }

    public function store(Request $request)
    {
        dd($request);
    }

}