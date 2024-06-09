<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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

    protected $fillable = ['id_colaborador','id_perfil','id_proyecto','correo','titulo','permiso'];

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
