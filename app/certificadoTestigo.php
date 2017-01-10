<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class certificadoTestigo extends Model
{
  protected $table = ['certificadoTestigo'];
  protected $fillable = ['persona_id', 'certificado_id'];

}
