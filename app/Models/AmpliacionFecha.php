<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AmpliacionFecha extends Model
{
    protected $table = 'ampliacion_fechas';
    protected $primaryKey = 'id_ampliacion_fechas';

    static $rules = [
		'id_proyecto' => 'required',
        'id_usuario' => 'required',
        'justificacion' => 'required',
        'documento_justificacion' => 'required',
        'nueva_fecha_limite' => 'required',
    ];
    protected $perPage = 20;

    protected $fillable = [
        'id_proyecto',
        'id_usuario',
        'justificacion',
        'documento_justificacion',
        'nueva_fecha_limite'
    ];

    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class, 'id_proyecto');
    }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }
}
