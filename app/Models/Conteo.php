<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Conteo
 * 
 * @property int $ConteoID
 * @property Carbon|null $FechaConteo
 * @property int|null $ProductosContadosNum
 * @property int $Usuarios_UsuarioID
 * 
 * @property Usuario $usuario
 * @property Collection|Detallesconteo[] $detallesconteos
 *
 * @package App\Models
 */
class Conteo extends Model
{
	protected $table = 'conteos';
	protected $primaryKey = 'ConteoID';
	public $timestamps = false;

	protected $casts = [
		'FechaConteo' => 'datetime',
		'ProductosContadosNum' => 'int',
		'Usuarios_UsuarioID' => 'int'
	];

	protected $fillable = [
		'FechaConteo',
		'ProductosContadosNum',
		'Usuarios_UsuarioID'
	];

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'Usuarios_UsuarioID');
	}

	public function detallesconteos()
	{
		return $this->hasMany(Detallesconteo::class, 'Conteos_ConteoID');
	}
}
