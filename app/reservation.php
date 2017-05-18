<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    public $table="reservations";

    protected $primaryKey = 'reservation_id';

    protected $fillable = [
        'customer', 'reserved_time', 'table_id', 'waiter_id'
    ];
}
