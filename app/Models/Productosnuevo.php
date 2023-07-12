<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Productosnuevo
 * 
 * @property int $ProductoNuevoID
 * @property string|null $Descripcion
 * @property Carbon|null $Fecha
 * @property int|null $Revisado
 * @property int $Usuarios_UsuarioID
 * 
 * @property Usuario $usuario
 *
 * @package App\Models
 */
class Productosnuevo extends Model
{
	protected $table = 'productosnuevos';
	protected $primaryKey = 'ProductoNuevoID';
	public $timestamps = false;

	protected $casts = [
		'Fecha' => 'datetime',
		'Revisado' => 'int',
		'Usuarios_UsuarioID' => 'int'
	];

	protected $fillable = [
		'Descripcion',
		'Fecha',
		'Revisado',
		'Usuarios_UsuarioID'
	];

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'Usuarios_UsuarioID');
	}
}
