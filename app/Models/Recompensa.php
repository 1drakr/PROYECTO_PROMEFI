<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Recompensa
 *
 * @property $id_recompensa
 * @property $id_proyecto
 * @property $titulo
 * @property $monto
 * @property $imagen
 * @property $descripcion
 * @property $complemento
 * @property $patrocinadores
 * @property $envio
 * @property $fecha_entrega
 * @property $cantidad
 * @property $tiempo_oferta
 * @property $created_at
 * @property $updated_at
 *
 * @property Complemento[] $complementos
 * @property Proyecto $proyecto
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Recompensa extends Model
{
    protected $table = 'recompensa';
    protected $primaryKey = 'id_recompensa';

    static $rules = [
		'id_proyecto' => 'required',
		'titulo' => 'required',
		'monto' => 'required',
		'imagen' => 'required',
		'descripcion' => 'required',
		'complemento' => 'required',
		'patrocinadores' => 'required',
		'envio' => 'required',
		'fecha_entrega' => 'required',
		'cantidad' => 'required',
		'tiempo_oferta' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_proyecto','titulo','monto','imagen','descripcion','complemento','patrocinadores','envio','fecha_entrega','cantidad','tiempo_oferta'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function complementos()
    {
        return $this->hasMany('App\Models\Complemento', 'id_recompensa', 'id_recompensa');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function proyecto()
    {
        return $this->hasOne('App\Models\Proyecto', 'id_proyecto', 'id_proyecto');
    }


}
