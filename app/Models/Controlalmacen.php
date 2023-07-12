<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Controlalmacen
 * 
 * @property int $Ubicaciones_UbicacionID
 * @property string $Productos_CodigoInterno
 * 
 * @property Producto $producto
 * @property Ubicacione $ubicacione
 *
 * @package App\Models
 */
class Controlalmacen extends Model
{
	protected $table = 'controlalmacen';
	public $timestamps = false;

	public function producto()
	{
		return $this->belongsTo(Producto::class, 'Productos_CodigoInterno');
	}

	public function ubicacione()
	{
		return $this->belongsTo(Ubicacione::class, 'Ubicaciones_UbicacionID');
	}
}
