<?php
namespace Domain\Card\Models;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{

    protected $fillable = ['hash','brand','last_digits','user_id'];

}