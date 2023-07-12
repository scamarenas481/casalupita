<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 * 
 * @property string $CodigoInterno
 * @property string|null $Descripcion
 * @property float|null $FactorUnidades
 * @property string|null $CodigoProveedor
 * @property string|null $ClaveAlterna
 * @property string|null $NumeroFabricante
 * @property string|null $Status
 * @property float|null $Existencias
 * @property int|null $ClaveSAT
 * @property string|null $ClaveUnidad
 * @property Carbon|null $FechaRegistro
 * @property bool|null $Contado
 * @property int $UnidadEntrada_UnidadID
 * @property int $UnidadSalida_UnidadID1
 * @property int $Usuarios_UsuarioID
 * @property int $Marcas_MarcaID
 * @property int $Lineas_LineaID
 * 
 * @property Linea $linea
 * @property Marca $marca
 * @property Unidade $unidade
 * @property Usuario $usuario
 * @property Collection|Conteo2[] $conteo2s
 * @property Collection|Controlalmacen[] $controlalmacens
 * @property Collection|Detallesconteo[] $detallesconteos
 * @property Collection|Faltante[] $faltantes
 * @property Collection|Proveedore[] $proveedores
 * @property Collection|Productossolicitado[] $productossolicitados
 *
 * @package App\Models
 */
class Producto extends Model
{
	protected $table = 'productos';
	protected $primaryKey = 'CodigoInterno';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'FactorUnidades' => 'float',
		'Existencias' => 'float',
		'ClaveSAT' => 'int',
		'FechaRegistro' => 'datetime',
		'Contado' => 'bool',
		'UnidadEntrada_UnidadID' => 'int',
		'UnidadSalida_UnidadID1' => 'int',
		'Usuarios_UsuarioID' => 'int',
		'Marcas_MarcaID' => 'int',
		'Lineas_LineaID' => 'int'
	];

	protected $fillable = [
		'Descripcion',
		'FactorUnidades',
		'CodigoProveedor',
		'ClaveAlterna',
		'NumeroFabricante',
		'Status',
		'Existencias',
		'ClaveSAT',
		'ClaveUnidad',
		'FechaRegistro',
		'Contado',
		'UnidadEntrada_UnidadID',
		'UnidadSalida_UnidadID1',
		'Usuarios_UsuarioID',
		'Marcas_MarcaID',
		'Lineas_LineaID'
	];

	public function linea()
	{
		return $this->belongsTo(Linea::class, 'Lineas_LineaID');
	}

	public function marca()
	{
		return $this->belongsTo(Marca::class, 'Marcas_MarcaID');
	}

	public function unidade()
	{
		return $this->belongsTo(Unidade::class, 'UnidadSalida_UnidadID1');
	}

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'Usuarios_UsuarioID');
	}

	public function conteo2s()
	{
		return $this->hasMany(Conteo2::class, 'Productos_CodigoInterno');
	}

	public function controlalmacens()
	{
		return $this->hasMany(Controlalmacen::class, 'Productos_CodigoInterno');
	}

	public function detallesconteos()
	{
		return $this->hasMany(Detallesconteo::class, 'Productos_CodigoInterno');
	}

	public function faltantes()
	{
		return $this->hasMany(Faltante::class, 'Productos_CodigoInterno');
	}

	public function proveedores()
	{
		return $this->belongsToMany(Proveedore::class, 'productos_has_proveedores', 'Productos_CodigoInterno', 'Proveedores_ProveedorID');
	}

	public function productossolicitados()
	{
		return $this->hasMany(Productossolicitado::class, 'Productos_CodigoInterno');
	}
}
