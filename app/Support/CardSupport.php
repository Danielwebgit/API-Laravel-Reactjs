<?php
namespace Support;

use App\Core\Http\Controllers\Controller;
use Domain\Card\Models\Card;
use Domain\User\Models\User;

class CardSupport extends Controller
{
    public function getCard()
    {

        $client = User::find(1);

        $pagarme = new \PagarMe\Client(Card::PAGAR_ME_KY);

        $newCard = false;

        if ($newCard){

            $getCreditCard = $pagarme->cards()->create([
                'holder_name' => 'Daniel Rocha da Conceição',
                'number' => '5234285383001058',
                'expiration_date' => '0522',
                'cvv' => '850',
            ]);

            if(!$getCreditCard->valid){
                echo "Cartão inválido!";
            }
            else {

                $createCreditCard = new Card();
                $createCreditCard->user_id = $client->id;
                $createCreditCard->hash = $getCreditCard->id;
                $createCreditCard->brand =$getCreditCard->brand;
                $createCreditCard->last_digits=$getCreditCard->last_digits;
                $createCreditCard->save();

            }

        }

        $newTransaction = true;



        if ($newTransaction){
            $creditCard = Card::find('4');
            $transaction = $pagarme->transactions()->create([
                "amount" => (55.80 * 100),
                "card_id" => $creditCard->hash,
                "metadata" =>
                    [
                        "orderId" => 1500
                    ]
            ]);
            dd($transaction);
        }



    }

}