<?php

namespace Proceso;

use Illuminate\Database\Eloquent\Model;

class motivos extends Model
{
    protected $table = 'motivos';

    protected $fillable = ['id', 'nombre_motivo'];
}
