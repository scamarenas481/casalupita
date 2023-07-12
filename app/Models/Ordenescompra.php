<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Ordenescompra
 * 
 * @property int $OrdenCompraID
 * @property Carbon|null $Fecha
 * @property int $Proveedores_ProveedorID
 * @property int $Usuarios_UsuarioID
 * 
 * @property Proveedore $proveedore
 * @property Usuario $usuario
 * @property Collection|Detallesordencompra[] $detallesordencompras
 * @property Collection|Incumplimientoproveedore[] $incumplimientoproveedores
 *
 * @package App\Models
 */
class Ordenescompra extends Model
{
	protected $table = 'ordenescompra';
	public $timestamps = false;

	protected $casts = [
		'Fecha' => 'datetime',
		'Proveedores_ProveedorID' => 'int',
		'Usuarios_UsuarioID' => 'int'
	];

	protected $fillable = [
		'Fecha',
		'Usuarios_UsuarioID'
	];

	public function proveedore()
	{
		return $this->belongsTo(Proveedore::class, 'Proveedores_ProveedorID');
	}

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'Usuarios_UsuarioID');
	}

	public function detallesordencompras()
	{
		return $this->hasMany(Detallesordencompra::class, 'OrdenesCompra_OrdenCompraID');
	}

	public function incumplimientoproveedores()
	{
		return $this->hasMany(Incumplimientoproveedore::class, 'OrdenesCompra_OrdenCompraID');
	}
}
