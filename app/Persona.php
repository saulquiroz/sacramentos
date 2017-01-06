<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table= "persona";

    protected $fillable = ['ci','nombre','apellido','fecha_nacimiento','genero_id'];
}
