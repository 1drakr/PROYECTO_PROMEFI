<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Rol
 *
 * @property $id_rol
 * @property $Nombre
 * @property $created_at
 * @property $updated_at
 *
 * @property Perfil[] $perfils
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Rol extends Model
{
    protected $table = 'rol';
    protected $primaryKey = 'id_rol';

    static $rules = [
		'Nombre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function perfils()
    {
        return $this->hasMany('App\Models\Perfil', 'id_rol', 'id_rol');
    }


}
