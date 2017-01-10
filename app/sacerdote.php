<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sacerdote extends Model
{
    protected $table = ['sacerdote'];
    protected $fillable = ['persona_id','tipoSacerdote_id'];
}
