<?php

namespace Proceso;

use Illuminate\Database\Eloquent\Model;

class equipo extends Model
{
    protected $table = 'equipos';

    protected $fillable = ['id','nombre_equipo'];
}
