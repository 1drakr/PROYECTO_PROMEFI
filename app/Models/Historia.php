<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Historium
 *
 * @property $id_historia
 * @property $id_proyecto
 * @property $titulo
 * @property $texto
 * @property $video
 * @property $imagen
 * @property $created_at
 * @property $updated_at
 *
 * @property Proyecto $proyecto
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Historia extends Model
{
    protected $table = 'historia';
    protected $primaryKey = 'id_historia';

    static $rules = [
		'id_proyecto' => 'required',
		'titulo' => 'required',
		'texto' => 'required',
		'video' => 'required',
		'imagen' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_proyecto','titulo','texto','video','imagen'];

    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class, 'id_proyecto');
    }

}
