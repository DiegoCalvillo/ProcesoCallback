<?php

namespace Proceso;

use Illuminate\Database\Eloquent\Model;

class sub_categorias extends Model
{
    protected $table = 'sub_categorias';

    protected $fillable = ['id', 'id_categorias', 'nombre_sub_categorias'];

    public static function sub_categorias($id)
    {
    	return sub_categorias::where('id_categorias', '=', $id)
        ->get();
    }

    /*public function categorias()
    {
    	return $this->belongsTo(categorias::class, 'id_categorias');
    }*/
}
