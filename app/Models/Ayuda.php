<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ayuda
 *
 * @property $id
 * @property $titulo
 * @property $asunto
 * @property $Fono
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ayuda extends Model
{
    
    static $rules = [
		'titulo' => 'required',
		'asunto' => 'required',
		'Fono' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['titulo','asunto','Fono'];



}
