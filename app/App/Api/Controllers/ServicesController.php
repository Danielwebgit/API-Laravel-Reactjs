<?php

namespace App\Api\Controllers;


use App\Core\Http\Controllers\Controller;

use Domain\User\Models\Services;
use Domain\User\Models\User;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $client = User::find(1);

        $pagarme = new \PagarMe\Client(User::PAGAR_ME_KY);

        $newCard = true;

        if ($newCard){

            $getCreditCard =$pagarme->cards()->create([
                'holder_name' => 'Daniel Rocha da Conceição',
                'number' => '5234285383001058',
                'expiration_date' => '0520',
                'cvv' => '850',
            ]);

        }

        if(!$getCreditCard->valid){
            echo "Cartão inválido!";
        }
        else {

        }


        //return view('site.home');

    }

    public function test()
    {
        app(User::class)->get();
        return response()->json(User::all());

    }

    public function store( Request $request )
    {

    }

}