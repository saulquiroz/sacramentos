<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ciudad extends Model
{
    protected $table=['ciudad'];
    protected $fillable = ['ciudad'];

    public $timestamps = false;
}
