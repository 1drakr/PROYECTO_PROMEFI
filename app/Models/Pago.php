<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    protected $table = 'pago';
    protected $primaryKey = 'id_pago';

    static $rules = [
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

    protected $fillable = ['id_proyecto','id_perfil','nombre_legal','id_fiscal','nombre_empresa','direccion_comercio','telefono','metodo_pago','cuenta_bancaria','monto'];

    public function perfil()
    {
        return $this->hasOne('App\Models\Perfil', 'id_perfil', 'id_perfil');
    }

    public function proyecto()
    {
        return $this->hasOne('App\Models\Proyecto', 'id_proyecto', 'id_proyecto');
    }
}
