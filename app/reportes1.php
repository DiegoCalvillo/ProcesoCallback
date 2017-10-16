<?php

namespace Proceso;

use Illuminate\Database\Eloquent\Model;

class reportes1 extends Model
{
    protected $table = 'reportes1s';

    protected $fillable = ['id', 'sare', 'asesor_encuesta_id', 'fecha_encuesta', 'hora_encuesta', 'supervisor_id', 'score_asesor', 'motivo_id', 'asesor_id'];

    public function User()
    {
    	return $this->belongsTo(User::class, 'asesor_id');
    }

    public function supervisores()
    {
    	return $this->belongsTo(supervisores::class, 'supervisor_id');
    }

    public function asesores()
    {
    	return $this->belongsTo(asesores::class, 'asesor_encuesta_id');
    }

    public function motivos()
    {
    	return $this->belongsTo(motivos::class, 'motivo_id');
    }
}
