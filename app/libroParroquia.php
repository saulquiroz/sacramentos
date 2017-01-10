<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class libroParroquia extends Model
{
    protected $table = ['libroParroquia'];
    protected $fillable = ['libro','pagina','numero','parroquia_id'];
}
