<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class waiter extends Model
{
    public $table="waiters";

    protected $primaryKey = 'waiters_id';

    protected $fillable = [
        'name', 'availability'
    ];
}
