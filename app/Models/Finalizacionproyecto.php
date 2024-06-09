<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Perfil;
use App\Models\Proyecto;

class Finalizacionproyecto extends Model
{
    protected $table = 'finalizacionproyecto';
    protected $primaryKey = 'id_finalizacionproyecto';
    static $rules = [
		'id_proyecto' => 'required',
		'id_perfil' => 'required',
		'documento_recompensa' => 'required',
    ];

    protected $perPage = 20;

    protected $fillable = ['id_proyecto','id_perfil','documento_recompensa'];

    public function perfil()
    {
        return $this->hasOne(Perfil::class, 'id_perfil', 'id_perfil');
    }

    public function proyecto()
    {
        return $this->hasOne(Proyecto::class, 'id_proyecto', 'id_proyecto');
    }


}
