<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PagoCreador
 *
 * @property $id_pago_creador
 * @property $id_proyecto
 * @property $id_perfil
 * @property $monto
 * @property $metodo_pago
 * @property $cuenta_bancaria
 * @property $created_at
 * @property $updated_at
 *
 * @property Perfil $perfil
 * @property Proyecto $proyecto
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class PagoCreador extends Model
{
    
    static $rules = [
		'id_pago_creador' => 'required',
		'id_proyecto' => 'required',
		'id_perfil' => 'required',
		'monto' => 'required',
		'metodo_pago' => 'required',
		'cuenta_bancaria' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_pago_creador','id_proyecto','id_perfil','monto','metodo_pago','cuenta_bancaria'];


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
