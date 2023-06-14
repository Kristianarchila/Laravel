<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Clase
 *
 * @property $id
 * @property $titulo
 * @property $descripcion
 * @property $curso_id
 * @property $free
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Clase extends Model
{
    
    static $rules = [
		'titulo' => 'required',
		'descripcion' => 'required',
		'curso_id' => 'required',
		'free' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['titulo','descripcion','curso_id','free'];



}
