<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Bitacora
 *
 * @property $id
 * @property $folio
 * @property $nombre
 * @property $dependecia
 * @property $nombre_sistema
 * @property $descripcion
 * @property $cobertura
 * @property $ambiente_servidor
 * @property $ambiente_web
 * @property $compatibilidad_servidor
 * @property $compatibilidad_web
 * @property $desarrollado
 * @property $id_responsable
 * @property $nombre_em_responsable
 * @property $categoria
 * @property $perfil
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Bitacora extends Model
{
    
    static $rules = [
		'folio' => 'required',
		'nombre' => 'required',
		'dependecia' => 'required',
		'nombre_sistema' => 'required',
		'descripcion' => 'required',
		'cobertura' => 'required',
		'ambiente_servidor' => 'required',
		'ambiente_web' => 'required',
		'compatibilidad_servidor' => 'required',
		'compatibilidad_web' => 'required',
		'desarrollado' => 'required',
		'id_responsable' => 'required',
		'nombre_em_responsable' => 'required',
		'categoria' => 'required',
		'perfil' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['folio','nombre','dependecia','nombre_sistema','descripcion','cobertura','ambiente_servidor','ambiente_web','compatibilidad_servidor','compatibilidad_web','desarrollado','id_responsable','nombre_em_responsable','categoria','perfil'];



}
