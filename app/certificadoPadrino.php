<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class certificadoPadrino extends Model
{
    protected $table = ['certificadoPadrino'];
    protected $fillable = ['persona_id', 'certificado_id'];
    
}
