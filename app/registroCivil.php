<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class registroCivil extends Model
{
  protected $table = ['registroCivil'];
  protected $fillable = ['oficialia', 'partida', 'numero', 'certificado_id'];

}
