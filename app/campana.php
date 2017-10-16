<?php

namespace Proceso;

use Illuminate\Database\Eloquent\Model;

class campana extends Model
{
    protected $table = 'campanas';

    protected $fillable = ['id', 'nombre_campana'];
}
