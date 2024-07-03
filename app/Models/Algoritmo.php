<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Algoritmo
 *
 * @property $a
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Algoritmo extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['a'];



}
