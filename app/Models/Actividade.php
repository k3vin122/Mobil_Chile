<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Actividade
 *
 * @property $id
 * @property $detalle
 * @property $responsables_id
 * @property $estados_actividades_id
 * @property $categorias_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Categoria $categoria
 * @property EstadosActividade $estadosActividade
 * @property Responsable $responsable
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Actividade extends Model
{
    
    static $rules = [
		'detalle' => 'required',
		'responsables_id' => 'required',
		'estados_actividades_id' => 'required',
		'categorias_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['detalle','responsables_id','estados_actividades_id','categorias_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoria()
    {
        return $this->hasOne('App\Models\Categoria', 'id', 'categorias_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estadosActividade()
    {
        return $this->hasOne('App\Models\EstadosActividade', 'id', 'estados_actividades_id','nombre');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function responsable()
    {
        return $this->hasOne('App\Models\Responsable', 'id', 'responsables_id');
    }
    

}
