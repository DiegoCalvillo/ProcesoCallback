<?php

namespace Proceso;

use Illuminate\Database\Eloquent\Model;

class encuesta extends Model
{
    protected $table = 'encuestas';

    protected $fillable = ['id', 'hora_encuesta', 'fecha_encuesta', 'asesor_encuesta', 'motivo', 'categoria_id', 'nombre_id', 'sub_categoria_id', 'comportamiento_id'];

    public function User()
    {
        return $this->belongsTo(User::class, 'nombre_id');
    }

    public function categorias()
    {
    	return $this->belongsTo(categorias::class, 'categoria_id');
    }

    public function sub_categorias()
    {
        return $this->belongsTo(sub_categorias::class, 'sub_categoria_id');
    }

    public function comportamiento()
    {
        return $this->belongsTo(comportamiento::class, 'comportamiento_id');
    }
}
