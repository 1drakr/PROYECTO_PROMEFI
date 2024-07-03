<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    protected $table = 'comentario';
    protected $primaryKey = 'id_comentario';

    static $rules = [
		'id_proyecto' => 'required',
		'id_perfil' => 'required',
		'contenido' => 'required',
    ];


    protected $fillable = [
        'id_proyecto',
        'id_perfil',
        'contenido'
    ];

    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class, 'id_proyecto');
    }

    public function perfil()
    {
        return $this->belongsTo(Perfil::class, 'id_perfil');
    }

    public function respuestas()
    {
        return $this->hasMany(RespuestaComentario::class, 'id_comentario');
    }
}
