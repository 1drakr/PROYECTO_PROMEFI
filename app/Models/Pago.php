<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pago
 *
 * @property $id_pago
 * @property $id_proyecto
 * @property $id_perfil
 * @property $nombre_legal
 * @property $id_fiscal
 * @property $nombre_empresa
 * @property $direccion_comercio
 * @property $telefono
 * @property $metodo_pago
 * @property $cuenta_bancaria
 * @property $monto
 * @property $created_at
 * @property $updated_at
 *
 * @property Perfil $perfil
 * @property Proyecto $proyecto
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pago extends Model
{
    
    static $rules = [
		'id_pago' => 'required',
		'id_proyecto' => 'required',
		'id_perfil' => 'required',
		'nombre_legal' => 'required',
		'id_fiscal' => 'required',
		'nombre_empresa' => 'required',
		'direccion_comercio' => 'required',
		'telefono' => 'required',
		'metodo_pago' => 'required',
		'cuenta_bancaria' => 'required',
		'monto' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_pago','id_proyecto','id_perfil','nombre_legal','id_fiscal','nombre_empresa','direccion_comercio','telefono','metodo_pago','cuenta_bancaria','monto'];


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
