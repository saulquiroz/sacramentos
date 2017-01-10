<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class parroquia extends Model
{
    protected $table = ['parroquia'];
    protected $fillable = ['nombre', 'direccion', 'jurisdiccion_id'];
}
