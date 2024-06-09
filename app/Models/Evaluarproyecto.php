<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Solicitudproyecto;
use App\Models\Validacionproyecto;

class Evaluarproyecto extends Model
{
    protected $table = 'evaluarproyecto';
    protected $primaryKey = 'id_evaluarproy';
    static $rules = [
		'id_solicitud' => 'required',
		'documento_proyecto' => 'required',
		'documento_evaluacion' => 'required',
		'id_estado' => 'required',
        'id_evauser' => 'required',
    ];

    protected $perPage = 20;

    protected $fillable = ['id_solicitud','documento_proyecto','documento_evaluacion','id_estado','id_evauser'];

    public function solicitudproyecto()
    {
        return $this->belongsTo(Solicitudproyecto::class, 'id_solicitud', 'id_solicitudProy');
    }

    public function validacionproyectos()
    {
        return $this->hasMany(Validacionproyecto::class, 'id_evaluacionproy', 'id_evaluarproy');
    }

    public function solicitud()
    {
        return $this->belongsTo(Solicitudproyecto::class, 'id_solicitud', 'id_solicitudProy');
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class, 'id_estado');
    }


}
