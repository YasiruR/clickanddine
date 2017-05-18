<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class table extends Model
{
    public $table="tables";

    protected $primaryKey = 'table_id';

    protected $fillable = [
        'table_id', 'status'
    ];
}
