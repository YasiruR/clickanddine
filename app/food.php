<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class food extends Model
{
    public $table="food";

    protected $primaryKey = 'food_id';

    protected $fillable = [
        'food_id', 'name', 'price'
    ];
}
