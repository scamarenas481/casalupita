<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Incidenciasproveedor
 * 
 * @property int $idIncumplimientoProveedores
 * @property int|null $FolioOrdenCompra
 * @property Carbon|null $FechaPromesaEntrega
 * @property Carbon|null $FechaEntrega
 * @property int|null $DiasAtraso
 * @property int|null $PedidoIncompleto
 * @property int|null $MaterialEnMalEstado
 * @property int|null $NoLlegoATiempo
 * @property int|null $MaterialIncorrecto
 * @property int|null $CantidadesIncorrectas
 * @property string|null $Observaciones
 * @property int|null $CantidadNoEntregada
 * @property int $DetallesOrdenCompra_DetalleOrdenCompraID
 * @property int $DetallesOrdenCompra_OrdenesCompra_OrdenCompraID
 * @property int $DetallesOrdenCompra_OrdenesCompra_Proveedores_ProveedorID
 * @property int $DetallesOrdenCompra_ProductosSolicitados_ProductoSolicitadoID
 * 
 * @property Detallesordencompra $detallesordencompra
 *
 * @package App\Models
 */
class Incidenciasproveedor extends Model
{
	protected $table = 'incidenciasproveedor';
	public $timestamps = false;

	protected $casts = [
		'FolioOrdenCompra' => 'int',
		'FechaPromesaEntrega' => 'datetime',
		'FechaEntrega' => 'datetime',
		'DiasAtraso' => 'int',
		'PedidoIncompleto' => 'int',
		'MaterialEnMalEstado' => 'int',
		'NoLlegoATiempo' => 'int',
		'MaterialIncorrecto' => 'int',
		'CantidadesIncorrectas' => 'int',
		'CantidadNoEntregada' => 'int',
		'DetallesOrdenCompra_DetalleOrdenCompraID' => 'int',
		'DetallesOrdenCompra_OrdenesCompra_OrdenCompraID' => 'int',
		'DetallesOrdenCompra_OrdenesCompra_Proveedores_ProveedorID' => 'int',
		'DetallesOrdenCompra_ProductosSolicitados_ProductoSolicitadoID' => 'int'
	];

	protected $fillable = [
		'FolioOrdenCompra',
		'FechaPromesaEntrega',
		'FechaEntrega',
		'DiasAtraso',
		'PedidoIncompleto',
		'MaterialEnMalEstado',
		'NoLlegoATiempo',
		'MaterialIncorrecto',
		'CantidadesIncorrectas',
		'Observaciones',
		'CantidadNoEntregada'
	];

	public function detallesordencompra()
	{
		return $this->belongsTo(Detallesordencompra::class, 'DetallesOrdenCompra_DetalleOrdenCompraID')
					->where('detallesordencompra.DetalleOrdenCompraID', '=', 'incidenciasproveedor.DetallesOrdenCompra_DetalleOrdenCompraID')
					->where('detallesordencompra.OrdenesCompra_OrdenCompraID', '=', 'incidenciasproveedor.DetallesOrdenCompra_OrdenesCompra_OrdenCompraID')
					->where('detallesordencompra.OrdenesCompra_Proveedores_ProveedorID', '=', 'incidenciasproveedor.DetallesOrdenCompra_OrdenesCompra_Proveedores_ProveedorID')
					->where('detallesordencompra.ProductosSolicitados_ProductoSolicitadoID', '=', 'incidenciasproveedor.DetallesOrdenCompra_ProductosSolicitados_ProductoSolicitadoID');
	}
}
