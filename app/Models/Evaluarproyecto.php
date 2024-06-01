<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Evaluarproyecto
 *
 * @property $id_evaluarproy
 * @property $id_solicitud
 * @property $documento_proyecto
 * @property $documento_evaluacion
 * @property $id_estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Estado $estado
 * @property Solicitudproyecto $solicitudproyecto
 * @property Validacionproyecto[] $validacionproyectos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
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

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_solicitud','documento_proyecto','documento_evaluacion','id_estado','id_evauser'];


    // public function estado()
    // {
    //     return $this->hasOne('App\Models\Estado', 'id_estado', 'id_estado');
    // }

    public function solicitudproyecto()
    {
        return $this->hasOne('App\Models\Solicitudproyecto', 'id_solicitudProy', 'id_solicitud');
    }

    public function validacionproyectos()
    {
        return $this->hasMany('App\Models\Validacionproyecto', 'id_evaluacionproy', 'id_evaluarproy');
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
