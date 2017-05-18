<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    public $table="menu";

    protected $primaryKey = 'food_id';

    protected $fillable = [
        'food_id', 'name', 'price'
    ];
}
