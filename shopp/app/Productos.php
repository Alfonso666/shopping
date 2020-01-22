<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
      protected $fillable = ['imagen','titulo','descripcion','precio','categoria'];
}
