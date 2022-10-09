<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Lugare
 *
 * @property $id
 * @property $nombreLugar
 * @property $idCategoria
 * @property $idMunicipio
 * @property $idDepartamento
 * @property $latitud
 * @property $longitud
 * @property $Descripcion
 * @property $mascotas
 * @property $Imagen
 * @property $precio
 * @property $numHuesped
 * @property $created_at
 * @property $updated_at
 *
 * @property Categoria $categoria
 * @property Municipio $municipio
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Lugare extends Model
{
    
    static $rules = [
		'nombreLugar' => 'required',
		'idCategoria' => 'required',
		'idMunicipio' => 'required',
		'idDepartamento' => 'required',
		'latitud' => 'required',
		'longitud' => 'required',
		'Descripcion' => 'required',
		'mascotas' => 'required',
		'Imagen' => 'required',
		'precio' => 'required',
		'numHuesped' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombreLugar','idCategoria','idMunicipio','idDepartamento','latitud','longitud','Descripcion','mascotas','Imagen','precio','numHuesped'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoria()
    {
        return $this->hasOne('App\Models\Categoria', 'id', 'idCategoria');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function municipio()
    {
        return $this->hasOne('App\Models\Municipio', 'id', 'idMunicipio');
    }
    
    public function departamento()
    {
        return $this->hasOne('App\Models\Departamento', 'id', 'idDepartamento');
    }

}
