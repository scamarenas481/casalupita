<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 * 
 * @property int $UsuarioID
 * @property string|null $NombreUsuario
 * @property string|null $PasswordHash
 * @property Carbon|null $FechaRegistro
 * @property string|null $Password
 * 
 * @property Collection|Conteo2[] $conteo2s
 * @property Collection|Conteo[] $conteos
 * @property Collection|Faltante[] $faltantes
 * @property Collection|Ordenescompra[] $ordenescompras
 * @property Collection|Producto[] $productos
 * @property Collection|Productosnuevo[] $productosnuevos
 * @property Collection|Productossolicitado[] $productossolicitados
 *
 * @package App\Models
 */
class Usuario extends Model
{
	protected $table = 'usuarios';
	protected $primaryKey = 'UsuarioID';
	public $timestamps = false;

	protected $casts = [
		'FechaRegistro' => 'datetime'
	];

	protected $fillable = [
		'NombreUsuario',
		'PasswordHash',
		'FechaRegistro',
		'Password'
	];

	public function conteo2s()
	{
		return $this->hasMany(Conteo2::class, 'Usuarios_UsuarioID');
	}

	public function conteos()
	{
		return $this->hasMany(Conteo::class, 'Usuarios_UsuarioID');
	}

	public function faltantes()
	{
		return $this->hasMany(Faltante::class, 'Usuarios_UsuarioID');
	}

	public function ordenescompras()
	{
		return $this->hasMany(Ordenescompra::class, 'Usuarios_UsuarioID');
	}

	public function productos()
	{
		return $this->hasMany(Producto::class, 'Usuarios_UsuarioID');
	}

	public function productosnuevos()
	{
		return $this->hasMany(Productosnuevo::class, 'Usuarios_UsuarioID');
	}

	public function productossolicitados()
	{
		return $this->hasMany(Productossolicitado::class, 'Usuarios_UsuarioID');
	}
}
