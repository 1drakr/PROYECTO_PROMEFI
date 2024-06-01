<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proyecto
 *
 * @property $id_proyecto
 * @property $titulo
 * @property $subtitulo
 * @property $categoria_principal
 * @property $categoria
 * @property $subcategoria
 * @property $ubicacion
 * @property $imagen
 * @property $video
 * @property $fecha_limite
 * @property $duracion_campaña
 * @property $monto_meta
 * @property $riesgos_desafios
 * @property $uso_ia
 * @property $tipo_proyecto
 * @property $pago
 * @property $estado
 * @property $completado
 * @property $created_at
 * @property $updated_at
 *
 * @property Colaborador[] $colaboradors
 * @property Complemento[] $complementos
 * @property Finalizacionproyecto[] $finalizacionproyectos
 * @property Historia[] $historias
 * @property Pago[] $pagos
 * @property PagoCreador[] $pagoCreadors
 * @property PagoPatrocinador[] $pagoPatrocinadors
 * @property Persona $persona
 * @property Preguntafrecuente[] $preguntafrecuentes
 * @property Recompensa[] $recompensas
 * @property Solicitudproyecto[] $solicitudproyectos
 * @property Perfil $perfil
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
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

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
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
        return $this->hasMany('App\Models\Solicitudproyecto', 'id_proyecto', 'id_proyecto');
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
