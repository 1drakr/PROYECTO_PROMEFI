<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Estado
 *
 * @property $id_estado
 * @property $nombre_estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Evaluarproyecto[] $evaluarproyectos
 * @property Proyecto[] $proyectos
 * @property Solicitudproyecto[] $solicitudproyectos
 * @property Validacionproyecto[] $validacionproyectos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Estado extends Model
{
    protected $table = 'estado';
    protected $primaryKey = 'id_estado';
    static $rules = [
		'nombre_estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function evaluarproyectos()
    {
        return $this->hasMany('App\Models\Evaluarproyecto', 'id_estado', 'id_estado');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function proyectos()
    {
        return $this->hasMany('App\Models\Proyecto', 'id_estado', 'id_estado');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function solicitudproyectos()
    {
        return $this->hasMany('App\Models\Solicitudproyecto', 'id_estado', 'id_estado');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function validacionproyectos()
    {
        return $this->hasMany('App\Models\Validacionproyecto', 'id_estado', 'id_estado');
    }


}
