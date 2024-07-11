<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;

    // Especificar la tabla asociada
    protected $table = 'score';

    // Especificar la clave primaria
    protected $primaryKey = 'id_score';

    // Los atributos que se pueden asignar en masa
    protected $fillable = [
        'id_proyecto',
        'score',
    ];

    // Relación con el modelo Proyecto
    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class, 'id_proyecto');
    }
}






