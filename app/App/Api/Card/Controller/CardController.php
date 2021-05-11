<?php


namespace App\Api\Card\Controller;


use App\Core\Http\Controllers\Controller;
use Domain\Card\Models\Card;

class CardController extends Controller
{

    public function index()
    {
        dd(Card::all());
    }

}