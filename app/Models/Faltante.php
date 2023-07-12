<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Faltante
 * 
 * @property int $FaltantesID
 * @property string|null $CodigoProveedor
 * @property string|null $Descripcion
 * @property float|null $CantidadSolicitada
 * @property int|null $SeTermino
 * @property int|null $NoSeManeja
 * @property int|null $ConExistencia
 * @property float|null $Existencias
 * @property Carbon|null $Fecha
 * @property int|null $Revisado
 * @property string $Productos_CodigoInterno
 * @property int $ObservacionesFaltantes_ObservacionID
 * @property int $Proveedores_ProveedorID
 * @property int $Unidades_UnidadID
 * @property int $Usuarios_UsuarioID
 * 
 * @property Observacionesfaltante $observacionesfaltante
 * @property Producto $producto
 * @property Proveedore $proveedore
 * @property Unidade $unidade
 * @property Usuario $usuario
 *
 * @package App\Models
 */
class Faltante extends Model
{
	protected $table = 'faltantes';
	public $timestamps = false;

	protected $casts = [
		'CantidadSolicitada' => 'float',
		'SeTermino' => 'int',
		'NoSeManeja' => 'int',
		'ConExistencia' => 'int',
		'Existencias' => 'float',
		'Fecha' => 'datetime',
		'Revisado' => 'int',
		'ObservacionesFaltantes_ObservacionID' => 'int',
		'Proveedores_ProveedorID' => 'int',
		'Unidades_UnidadID' => 'int',
		'Usuarios_UsuarioID' => 'int'
	];

	protected $fillable = [
		'CodigoProveedor',
		'Descripcion',
		'CantidadSolicitada',
		'SeTermino',
		'NoSeManeja',
		'ConExistencia',
		'Existencias',
		'Fecha',
		'Revisado'
	];

	public function observacionesfaltante()
	{
		return $this->belongsTo(Observacionesfaltante::class, 'ObservacionesFaltantes_ObservacionID');
	}

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
}
