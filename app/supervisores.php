<?php

namespace Proceso;

use Illuminate\Database\Eloquent\Model;

class supervisores extends Model
{
    protected $table = 'supervisores';

    protected $fillable = ['id', 'nombre_supervisor', 'equipo_id', 'campana_id', 'estatus_id'];

    public function campana()
    {
    	return $this->belongsTo(campana::class, 'campana_id');
    }

    public function equipo()
    {
    	return $this->belongsTo(equipo::class, 'equipo_id');
    }

    public function estatus()
    {
        return $this->belongsTo(estatus::class, 'estatus_id');
    }
}
