<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    use HasFactory;
    protected $table = 'perfil';
    protected $primaryKey = 'id_perfil';

    static $rules = [
		'id_users' => 'required',
		'Nombre' => 'required',
		'Apellido' => 'required',
		'Privacidad' => 'required',
		'id_rol' => 'required',
		'Estado' => 'required',
    ];

    protected $perPage = 20;


    protected $fillable = ['id_users','Nombre','Apellido','Avatar','Biografia','Privacidad','Ubicacion','ZonaHoraria','UrlPerso','SitioWeb','id_rol','Estado'];

    public function direccions()
    {
        return $this->hasMany('App\Models\Direccion', 'id_perfil', 'id_perfil');
    }

    public function redessociales()
    {
        return $this->hasMany('App\Models\Redessociale', 'id_perfil_amigo', 'id_perfil');
    }

    public function proyectos()
    {
        return $this->hasMany(Proyecto::class, 'id_perfil');
    }

    public function usuariopagos()
    {
        return $this->hasMany('App\Models\Usuariopago', 'id_perfil', 'id_perfil');
    }

    public function rol()
    {
        return $this->belongsTo('App\Models\Rol', 'id_rol', 'id_rol');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id_users', 'id');
    }

}
