<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Estado;
use App\Models\Proyecto;
use App\Models\Evaluarproyecto;

class Solicitudproyecto extends Model
{
    protected $table = 'solicitudproyecto';
    protected $primaryKey = 'id_solicitudProy';
    static $rules = [
		'id_proyecto' => 'required',
		'id_usuario' => 'required',
		'fecha_registro' => 'required',
		'id_estado' => 'required',
    ];

    protected $perPage = 20;

    protected $fillable = ['id_proyecto','id_usuario','fecha_registro','id_estado'];

    public function evaluarproyectos()
    {
        return $this->hasMany(Evaluarproyecto::class, 'id_solicitud', 'id_solicitudProy');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }

    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class, 'id_proyecto');
    }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class, 'id_estado');
    }


}
