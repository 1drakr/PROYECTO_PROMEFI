<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recompensa extends Model
{
    use HasFactory;
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

    protected $fillable = ['id_proyecto','titulo','monto','imagen','descripcion','complemento','patrocinadores','envio','fecha_entrega','cantidad','tiempo_oferta'];

    public function complementos()
    {
        return $this->hasMany('App\Models\Complemento', 'id_recompensa', 'id_recompensa');
    }

    public function proyecto()
    {
        return $this->hasOne('App\Models\Proyecto', 'id_proyecto', 'id_proyecto');
    }
}
