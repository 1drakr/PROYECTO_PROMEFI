<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Solicitudproyecto;

class Proyecto extends Model
{
    protected $table = 'proyecto';
    protected $primaryKey = 'id_proyecto';

    static $rules = [
        'id_perfil' => 'required',
        'titulo' => 'required',
        'subtitulo' => 'required',
        'categoria_principal' => 'required',
        'categoria' => 'required',
        'subcategoria' => 'required',
        'ubicacion' => 'required',
        'imagen' => 'required',
        'video' => 'required',
        'fecha_limite' => 'required',
        'duracion_campaña' => 'required',
        'monto_meta' => 'required',
        'riesgos_desafios' => 'required',
        'uso_ia' => 'required',
        'tipo_proyecto' => 'required',
        'pago' => 'required',
        'id_estado' => 'required',
        'completado' => 'required',
    ];

    protected $perPage = 20;

    protected $fillable = [
        'id_perfil', 'titulo', 'subtitulo', 'categoria_principal', 'categoria', 'subcategoria',
        'ubicacion', 'imagen', 'video', 'fecha_limite', 'duracion_campaña', 'monto_meta',
        'riesgos_desafios', 'uso_ia', 'tipo_proyecto', 'pago', 'id_estado', 'completado'
    ];

    public function colaboradors()
    {
        return $this->hasMany('App\Models\Colaborador', 'id_proyecto', 'id_proyecto');
    }

    public function complementos()
    {
        return $this->hasMany('App\Models\Complemento', 'id_proyecto', 'id_proyecto');
    }

    public function finalizacionproyectos()
    {
        return $this->hasMany('App\Models\Finalizacionproyecto', 'id_proyecto', 'id_proyecto');
    }

    public function pagos()
    {
        return $this->hasMany('App\Models\Pago', 'id_proyecto', 'id_proyecto');
    }

    public function pagoCreadors()
    {
        return $this->hasMany('App\Models\PagoCreador', 'id_proyecto', 'id_proyecto');
    }

    public function pagoPatrocinadors()
    {
        return $this->hasMany('App\Models\PagoPatrocinador', 'id_proyecto', 'id_proyecto');
    }

    public function persona()
    {
        return $this->hasOne('App\Models\Persona', 'id_proyecto', 'id_proyecto');
    }

    public function preguntafrecuentes()
    {
        return $this->hasMany('App\Models\Preguntafrecuente', 'id_proyecto', 'id_proyecto');
    }

    public function solicitudproyectos()
    {
        return $this->hasMany(Solicitudproyecto::class, 'id_proyecto', 'id_proyecto');
    }

    public function users()
    {
        return $this->hasManyThrough('App\Models\User', 'App\Models\Perfil', 'id_perfil', 'id', 'id_perfil', 'id_users');
    }

    public function recompensas()
    {
        return $this->hasMany(Recompensa::class, 'id_proyecto', 'id_proyecto');
    }

    public function historias()
    {
        return $this->hasMany(Historia::class, 'id_proyecto', 'id_proyecto');
    }

    public function uses()
    {
        return $this->hasManyThrough(User::class, Perfil::class, 'id_perfil', 'id', 'id_perfil', 'id_users');
    }

    public function perfil()
    {
        return $this->belongsTo(Perfil::class, 'id_perfil');
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class, 'id_estado');
    }

    public function historia()
    {
        return $this->hasOne(Historia::class, 'id_proyecto');
    }

}
