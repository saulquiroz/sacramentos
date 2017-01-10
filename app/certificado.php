<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class certificado extends Model
{
    protected $table = ['certificado'];
    protected $fillable = ['fecha', 'persona_id', 'parroquia_id', 'sacerdote_id', 'sacramento_id', 'ciudad_id'];
    
}
