<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipoSacerdote extends Model
{
  protected $table = "tipoSacerdote";
  protected $fillable = ['tipoSacerdote'];
  public $timestamps = false;
}
