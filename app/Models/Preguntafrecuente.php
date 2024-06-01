<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Preguntafrecuente
 *
 * @property $id_preguntasfrec
 * @property $id_proyecto
 * @property $pregunta
 * @property $respuesta
 * @property $created_at
 * @property $updated_at
 *
 * @property Proyecto $proyecto
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Preguntafrecuente extends Model
{
    
    static $rules = [
		'id_preguntasfrec' => 'required',
		'id_proyecto' => 'required',
		'pregunta' => 'required',
		'respuesta' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_preguntasfrec','id_proyecto','pregunta','respuesta'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function proyecto()
    {
        return $this->hasOne('App\Models\Proyecto', 'id_proyecto', 'id_proyecto');
    }
    

}
