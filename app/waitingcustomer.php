<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class waitingcustomer extends Model
{
    public $table="waitinglist";

    protected $primaryKey = 'id';

    protected $fillable = [
        'name', 'contact', 'table_id'
    ];
}
