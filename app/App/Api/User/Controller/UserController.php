<?php
namespace App\Api\User\Controller;

use App\Core\Http\Controllers\Controller;
use Domain\User\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{

    public function index()
    {

        return response()->json(User::all());
    }

    public function store(Request $request)
    {

        $dataForm=$request->all();
        User::create($dataForm);

    }



}