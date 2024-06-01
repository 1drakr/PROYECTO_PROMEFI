<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Colaborador
 *
 * @property $id_colaborador
 * @property $id_perfil
 * @property $id_proyecto
 * @property $correo
 * @property $titulo
 * @property $permiso
 * @property $created_at
 * @property $updated_at
 *
 * @property Perfil $perfil
 * @property Proyecto $proyecto
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Colaborador extends Model
{
    
    static $rules = [
		'id_colaborador' => 'required',
		'id_perfil' => 'required',
		'id_proyecto' => 'required',
		'correo' => 'required',
		'titulo' => 'required',
		'permiso' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_colaborador','id_perfil','id_proyecto','correo','titulo','permiso'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function perfil()
    {
        return $this->hasOne('App\Models\Perfil', 'id_perfil', 'id_perfil');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function proyecto()
    {
        return $this->hasOne('App\Models\Proyecto', 'id_proyecto', 'id_proyecto');
    }
    

}
