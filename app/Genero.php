<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    protected $table = "genero";
    protected $fillable = ['genero'];
    public $timestamps = false;

    //aca solo se guarda en la tabla genero
}
