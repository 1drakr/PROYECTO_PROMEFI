<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RespuestaComentario extends Model
{
    use HasFactory;

    protected $table = 'respuesta_comentario';
    protected $primaryKey = 'id_respuesta';

    static $rules = [
		'id_comentario' => 'required',
		'id_perfil' => 'required',
		'contenido' => 'required',
    ];


    protected $fillable = [
        'id_comentario',
        'id_perfil',
        'contenido'
    ];

    protected $perPage = 20;

    public function comentario()
    {
        return $this->belongsTo(Comentario::class, 'id_comentario');
    }

    public function perfil()
    {
        return $this->belongsTo(Perfil::class, 'id_perfil');
    }
}
