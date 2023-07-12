<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Detallesordencompra
 * 
 * @property int $DetalleOrdenCompraID
 * @property float|null $CantidadSolicitada
 * @property float|null $CantidadEntregada
 * @property int $OrdenesCompra_OrdenCompraID
 * @property int $OrdenesCompra_Proveedores_ProveedorID
 * @property int $ProductosSolicitados_ProductoSolicitadoID
 * 
 * @property Ordenescompra $ordenescompra
 * @property Productossolicitado $productossolicitado
 * @property Collection|Incidenciasproveedor[] $incidenciasproveedors
 *
 * @package App\Models
 */
class Detallesordencompra extends Model
{
	protected $table = 'detallesordencompra';
	public $timestamps = false;

	protected $casts = [
		'CantidadSolicitada' => 'float',
		'CantidadEntregada' => 'float',
		'OrdenesCompra_OrdenCompraID' => 'int',
		'OrdenesCompra_Proveedores_ProveedorID' => 'int',
		'ProductosSolicitados_ProductoSolicitadoID' => 'int'
	];

	protected $fillable = [
		'CantidadSolicitada',
		'CantidadEntregada'
	];

	public function ordenescompra()
	{
		return $this->belongsTo(Ordenescompra::class, 'OrdenesCompra_OrdenCompraID')
					->where('ordenescompra.OrdenCompraID', '=', 'detallesordencompra.OrdenesCompra_OrdenCompraID')
					->where('ordenescompra.Proveedores_ProveedorID', '=', 'detallesordencompra.OrdenesCompra_Proveedores_ProveedorID');
	}

	public function productossolicitado()
	{
		return $this->belongsTo(Productossolicitado::class, 'ProductosSolicitados_ProductoSolicitadoID');
	}

	public function incidenciasproveedors()
	{
		return $this->hasMany(Incidenciasproveedor::class, 'DetallesOrdenCompra_DetalleOrdenCompraID');
	}
}
