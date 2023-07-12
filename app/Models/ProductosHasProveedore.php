<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductosHasProveedore
 * 
 * @property string $Productos_CodigoInterno
 * @property int $Proveedores_ProveedorID
 * 
 * @property Producto $producto
 * @property Proveedore $proveedore
 *
 * @package App\Models
 */
class ProductosHasProveedore extends Model
{
	protected $table = 'productos_has_proveedores';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'Proveedores_ProveedorID' => 'int'
	];

	public function producto()
	{
		return $this->belongsTo(Producto::class, 'Productos_CodigoInterno');
	}

	public function proveedore()
	{
		return $this->belongsTo(Proveedore::class, 'Proveedores_ProveedorID');
	}
}
