<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Conteo2
 * 
 * @property int $Conteo2ID
 * @property float|null $ExistenciasContadas
 * @property Carbon|null $FechaConteo
 * @property string $Productos_CodigoInterno
 * @property int $Usuarios_UsuarioID
 * 
 * @property Producto $producto
 * @property Usuario $usuario
 *
 * @package App\Models
 */
class Conteo2 extends Model
{
	protected $table = 'conteo2';
	protected $primaryKey = 'Conteo2ID';
	public $timestamps = false;

	protected $casts = [
		'ExistenciasContadas' => 'float',
		'FechaConteo' => 'datetime',
		'Usuarios_UsuarioID' => 'int'
	];

	protected $fillable = [
		'ExistenciasContadas',
		'FechaConteo',
		'Productos_CodigoInterno',
		'Usuarios_UsuarioID'
	];

	public function producto()
	{
		return $this->belongsTo(Producto::class, 'Productos_CodigoInterno');
	}

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'Usuarios_UsuarioID');
	}
}
