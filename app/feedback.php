<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class feedback extends Model
{
    public $table="feedbacks";

    protected $fillable = [
        'name', 'feedback'
    ];
}
