<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Unidade
 * 
 * @property int $UnidadID
 * @property string|null $Nombre Unidad
 * 
 * @property Collection|Faltante[] $faltantes
 * @property Collection|Producto[] $productos
 * @property Collection|Productossolicitado[] $productossolicitados
 *
 * @package App\Models
 */
class Unidade extends Model
{
	protected $table = 'unidades';
	protected $primaryKey = 'UnidadID';
	public $timestamps = false;

	protected $fillable = [
		'Nombre Unidad'
	];

	public function faltantes()
	{
		return $this->hasMany(Faltante::class, 'Unidades_UnidadID');
	}

	public function productos()
	{
		return $this->hasMany(Producto::class, 'UnidadSalida_UnidadID1');
	}

	public function productossolicitados()
	{
		return $this->hasMany(Productossolicitado::class, 'Unidades_UnidadID');
	}
}
