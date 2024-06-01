<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Finalizacionproyecto
 *
 * @property $id_finalizacionproyecto
 * @property $id_proyecto
 * @property $id_perfil
 * @property $documento_recompensa
 * @property $created_at
 * @property $updated_at
 *
 * @property Perfil $perfil
 * @property Proyecto $proyecto
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Finalizacionproyecto extends Model
{
    
    static $rules = [
		'id_finalizacionproyecto' => 'required',
		'id_proyecto' => 'required',
		'id_perfil' => 'required',
		'documento_recompensa' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_finalizacionproyecto','id_proyecto','id_perfil','documento_recompensa'];


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
