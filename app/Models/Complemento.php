<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Complemento extends Model
{

    static $rules = [
		'id_complemento' => 'required',
		'id_proyecto' => 'required',
		'id_recompensa' => 'required',
		'nombre' => 'required',
		'imagen' => 'required',
    ];

    protected $perPage = 20;

    protected $fillable = ['id_complemento','id_proyecto','id_recompensa','nombre','imagen'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function proyecto()
    {
        return $this->hasOne('App\Models\Proyecto', 'id_proyecto', 'id_proyecto');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function recompensa()
    {
        return $this->hasOne('App\Models\Recompensa', 'id_recompensa', 'id_recompensa');
    }


}
