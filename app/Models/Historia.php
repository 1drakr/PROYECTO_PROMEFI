<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Historia extends Model
{
    use HasFactory;
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
