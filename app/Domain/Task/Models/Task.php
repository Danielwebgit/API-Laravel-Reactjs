<?php

namespace Domain\Task\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * The attributes that are mass assignable.
     * @var array
     *
     */

    protected $fillable = ['task','category'];



}
