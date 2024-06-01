<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Validacionproyecto
 *
 * @property $id_validacionproy
 * @property $id_evaluacionproy
 * @property $documento_validacion
 * @property $id_perfil
 * @property $id_estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Estado $estado
 * @property Evaluarproyecto $evaluarproyecto
 * @property Perfil $perfil
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Validacionproyecto extends Model
{
    protected $table = 'validacionproyecto';
    protected $primaryKey = 'id_validacionproy';
    static $rules = [
		'id_evaluacionproy' => 'required',
		'documento_validacion' => 'required',
		'id_perfil' => 'required',
		'id_estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_evaluacionproy','documento_validacion','id_perfil','id_estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estado()
    {
        return $this->hasOne('App\Models\Estado', 'id_estado', 'id_estado');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function evaluarproyecto()
    {
        return $this->hasOne('App\Models\Evaluarproyecto', 'id_evaluarproy', 'id_evaluacionproy');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function perfil()
    {
        return $this->hasOne('App\Models\Perfil', 'id_perfil', 'id_perfil');
    }


}
