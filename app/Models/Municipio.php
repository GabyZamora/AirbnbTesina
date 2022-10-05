<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Municipio
 *
 * @property $id
 * @property $municipio
 * @property $idDepartamento
 * @property $codigo
 * @property $created_at
 * @property $updated_at
 *
 * @property Departamento $departamento
 * @property Lugare[] $lugares
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Municipio extends Model
{
    
    static $rules = [
		'municipio' => 'required',
		'idDepartamento' => 'required',
		'codigo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['municipio','idDepartamento','codigo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function departamento()
    {
        return $this->hasOne('App\Models\Departamento', 'id', 'idDepartamento');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lugares()
    {
        return $this->hasMany('App\Models\Lugare', 'idMunicipio', 'id');
    }
    

}
