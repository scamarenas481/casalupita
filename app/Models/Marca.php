<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Marca
 * 
 * @property int $MarcaID
 * @property string|null $NombreMarca
 * @property int $Fabricantes_FabricanteID
 * 
 * @property Fabricante $fabricante
 * @property Collection|Producto[] $productos
 *
 * @package App\Models
 */
class Marca extends Model
{
	protected $table = 'marcas';
	protected $primaryKey = 'MarcaID';
	public $timestamps = false;

	protected $casts = [
		'Fabricantes_FabricanteID' => 'int'
	];

	protected $fillable = [
		'NombreMarca',
		'Fabricantes_FabricanteID'
	];

	public function fabricante()
	{
		return $this->belongsTo(Fabricante::class, 'Fabricantes_FabricanteID');
	}

	public function productos()
	{
		return $this->hasMany(Producto::class, 'Marcas_MarcaID');
	}
}
