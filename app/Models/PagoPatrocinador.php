<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class PagoPatrocinador extends Model
{
    protected $table = 'pago_patrocinador';
    protected $primaryKey = 'id_pago_patrocinador';

    static $rules = [
		'id_proyecto' => 'required',
		'id_perfil' => 'required',
		'monto' => 'required',
		'metodo_pago' => 'required',
		'cuenta_bancaria' => 'required',
    ];

    protected $perPage = 20;

    protected $fillable = ['id_proyecto','id_perfil','monto','metodo_pago','cuenta_bancaria'];

    public function perfil()
    {
        return $this->hasOne('App\Models\Perfil', 'id_perfil', 'id_perfil');
    }

    public function proyecto()
    {
        return $this->hasOne('App\Models\Proyecto', 'id_proyecto', 'id_proyecto');
    }


}
