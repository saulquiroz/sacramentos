<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sacerdoteParroquia extends Model
{
    protected $table = ['sacerdoteParroquia'];
    protected $fillable = ['sacerdote_id', 'parroquia_id'];
}
