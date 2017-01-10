<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class certificadoPadre extends Model
{
  protected $table = ['certificadoPadre'];
  protected $fillable = ['tipoPadre', 'persona_id', 'certificado_id'];

}
