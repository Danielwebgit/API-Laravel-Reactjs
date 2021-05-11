<?php
namespace Domain\Card\Models;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    const PAGAR_ME_KY = "ak_test_bvNaSQPcmZ1Z7N75AscO3d3T9JzpCj";

    protected $fillable = ['hash','brand','last_digits','user_id'];

}