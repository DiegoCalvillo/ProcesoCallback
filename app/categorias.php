<?php

namespace Proceso;

use Illuminate\Database\Eloquent\Model;

class categorias extends Model
{
    protected $table = 'categorias';

    protected $fillable = ['id', 'nombre_categoria'];

    public function sub_categorias()
    {
    	return $this->hasMany(sub_categorias::class, 'id_categorias');
    }
}
