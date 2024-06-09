<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Perfil;
use App\Models\Estado;
use App\Models\Evaluarproyecto;

class Validacionproyecto extends Model
{
    protected $table = 'validacionproyecto';
    protected $primaryKey = 'id_validacionproy';
    static $rules = [
		'id_evaluacionproy' => 'required',
		'documento_validacion' => 'required',
		'id_perfil' => 'required',
		'id_estado' => 'required',
    ];

    protected $perPage = 20;

    protected $fillable = ['id_evaluacionproy','documento_validacion','id_perfil','id_estado'];

    public function estado()
    {
        return $this->belongsTo(Estado::class, 'id_estado');
    }
    public function perfil()
    {
        return $this->belongsTo(Perfil::class, 'id_perfil');
    }

    public function evaluarproyecto()
    {
        return $this->belongsTo(Evaluarproyecto::class, 'id_evaluacionproy','id_evaluarproy');
    }

}
