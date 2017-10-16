<?php

namespace Proceso;

use Illuminate\Database\Eloquent\Model;

class estatus extends Model
{
    protected $table = 'estatus';

    protected $fillable = ['id', 'nombre_status'];
}
