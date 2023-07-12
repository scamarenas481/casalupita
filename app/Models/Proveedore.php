<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Proveedore
 * 
 * @property int $ProveedorID
 * @property string|null $NombreProveedor
 * 
 * @property Collection|Faltante[] $faltantes
 * @property Collection|Ordenescompra[] $ordenescompras
 * @property Collection|Producto[] $productos
 * @property Collection|Productossolicitado[] $productossolicitados
 *
 * @package App\Models
 */
class Proveedore extends Model
{
	protected $table = 'proveedores';
	protected $primaryKey = 'ProveedorID';
	public $timestamps = false;

	protected $fillable = [
		'NombreProveedor'
	];

	public function faltantes()
	{
		return $this->hasMany(Faltante::class, 'Proveedores_ProveedorID');
	}

	public function ordenescompras()
	{
		return $this->hasMany(Ordenescompra::class, 'Proveedores_ProveedorID');
	}

	public function productos()
	{
		return $this->belongsToMany(Producto::class, 'productos_has_proveedores', 'Proveedores_ProveedorID', 'Productos_CodigoInterno');
	}

	public function productossolicitados()
	{
		return $this->hasMany(Productossolicitado::class, 'Proveedores_ProveedorID');
	}
}
