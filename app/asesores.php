<?php

namespace Proceso;

use Illuminate\Database\Eloquent\Model;

class asesores extends Model
{
    protected $table = 'asesores';

    protected $fillable = ['id', 'sare', 'nombre_asesor', 'equipo_id', 'campana_id', 'supervisor_id', 'estatus_id'];

    public function campana()
    {
    	return $this->belongsTo(campana::class, 'campana_id');
    }

    public function equipo()
    {
    	return $this->belongsTo(equipo::class, 'equipo_id');
    }

    public function supervisores()
    {
    	return $this->belongsTo(supervisores::class, 'supervisor_id');
    }

    public function estatus()
    {
        return $this->belongsTo(estatus::class, 'estatus_id');
    }

    public static function asesores($id)
    {
        return asesores::where('supervisor_id', '=', $id)
        ->get();
    }
}
