<?php

namespace App\Api\Controllers;


use App\Core\Http\Controllers\Controller;

use Domain\publicacoes\models\publicacoes_fila_2020_08_02;

use Illuminate\Http\Request;


class UserController extends Controller
{
    public function index()
    {
        return "ca";
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        dd($request);
    }

}