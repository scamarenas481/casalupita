<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Detallesconteo
 * 
 * @property int $DetalleConteoID
 * @property float|null $ExistenciasContadas
 * @property int $Conteos_ConteoID
 * @property string $Productos_CodigoInterno
 * 
 * @property Conteo $conteo
 * @property Producto $producto
 *
 * @package App\Models
 */
class Detallesconteo extends Model
{
	protected $table = 'detallesconteo';
	protected $primaryKey = 'DetalleConteoID';
	public $timestamps = false;

	protected $casts = [
		'ExistenciasContadas' => 'float',
		'Conteos_ConteoID' => 'int'
	];

	protected $fillable = [
		'ExistenciasContadas',
		'Conteos_ConteoID',
		'Productos_CodigoInterno'
	];

	public function conteo()
	{
		return $this->belongsTo(Conteo::class, 'Conteos_ConteoID');
	}

	public function producto()
	{
		return $this->belongsTo(Producto::class, 'Productos_CodigoInterno');
	}
}
