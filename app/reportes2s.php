<?php

namespace Proceso;

use Illuminate\Database\Eloquent\Model;

class reportes2s extends Model
{
    protected $table = 'reportes2s';

    protected $fillable = ['id', 'categoria_id', 'sub_categoria_id', 'comportamiento_id', 'score_nps'];

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
