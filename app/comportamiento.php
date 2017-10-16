<?php

namespace Proceso;

use Illuminate\Database\Eloquent\Model;

class comportamiento extends Model
{
    protected $table = 'comportamientos';

    protected $fillable = ['id', 'id_sub_categorias', 'nombre_comportamiento'];

    public static function comportamiento($id)
    {
    	return comportamiento::where('id_sub_categorias', '=', $id)
    	->get();
    }
}
