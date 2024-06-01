<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Solicitudproyecto
 *
 * @property $id_solicitudProy
 * @property $id_proyecto
 * @property $id_usuario
 * @property $fecha_registro
 * @property $id_estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Estado $estado
 * @property Evaluarproyecto[] $evaluarproyectos
 * @property Proyecto $proyecto
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Solicitudproyecto extends Model
{
    protected $table = 'solicitudproyecto';
    protected $primaryKey = 'id_solicitudProy';
    static $rules = [
		'id_proyecto' => 'required',
		'id_usuario' => 'required',
		'fecha_registro' => 'required',
		'id_estado' => 'required',
    ];

    protected $perPage = 20;

    protected $fillable = ['id_proyecto','id_usuario','fecha_registro','id_estado'];

    // public function estado()
    // {
    //     return $this->hasOne('App\Models\Estado', 'id_estado', 'id_estado');
    // }

    public function evaluarproyectos()
    {
        return $this->hasMany('App\Models\Evaluarproyecto', 'id_solicitud', 'id_solicitudProy');
    }


    // public function proyecto()
    // {
    //     return $this->hasOne('App\Models\Proyecto', 'id_proyecto', 'id_proyecto');
    // }

    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'id_usuario');
    }

    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class, 'id_proyecto');
    }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class, 'id_estado');
    }


}
