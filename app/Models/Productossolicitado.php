<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Productossolicitado
 * 
 * @property int $ProductoSolicitadoID
 * @property float|null $CantidadSolicitada
 * @property int|null $SeTermino
 * @property int|null $NoSeManeja
 * @property Carbon|null $Fecha
 * @property int|null $Revisado
 * @property string|null $CodigoProveedor
 * @property int $Usuarios_UsuarioID
 * @property string $Productos_CodigoInterno
 * @property int $Unidades_UnidadID
 * @property int $Proveedores_ProveedorID
 * 
 * @property Producto $producto
 * @property Proveedore $proveedore
 * @property Unidade $unidade
 * @property Usuario $usuario
 * @property Collection|Detallesordencompra[] $detallesordencompras
 *
 * @package App\Models
 */
class Productossolicitado extends Model
{
	protected $table = 'productossolicitados';
	protected $primaryKey = 'ProductoSolicitadoID';
	public $timestamps = false;

	protected $casts = [
		'CantidadSolicitada' => 'float',
		'SeTermino' => 'int',
		'NoSeManeja' => 'int',
		'Fecha' => 'datetime',
		'Revisado' => 'int',
		'Usuarios_UsuarioID' => 'int',
		'Unidades_UnidadID' => 'int',
		'Proveedores_ProveedorID' => 'int'
	];

	protected $fillable = [
		'CantidadSolicitada',
		'SeTermino',
		'NoSeManeja',
		'Fecha',
		'Revisado',
		'CodigoProveedor',
		'Usuarios_UsuarioID',
		'Productos_CodigoInterno',
		'Unidades_UnidadID',
		'Proveedores_ProveedorID'
	];

	public function producto()
	{
		return $this->belongsTo(Producto::class, 'Productos_CodigoInterno');
	}

	public function proveedore()
	{
		return $this->belongsTo(Proveedore::class, 'Proveedores_ProveedorID');
	}

	public function unidade()
	{
		return $this->belongsTo(Unidade::class, 'Unidades_UnidadID');
	}

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'Usuarios_UsuarioID');
	}

	public function detallesordencompras()
	{
		return $this->hasMany(Detallesordencompra::class, 'ProductosSolicitados_ProductoSolicitadoID');
	}
}
