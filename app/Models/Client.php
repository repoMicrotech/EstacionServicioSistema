<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
	use HasFactory;
	protected $fillable = [ 'nombre', 'nit', 'direccion', 'representante_legal', 'ci_legal', 'estado', 'location_id' ];

	public function city() {
		return $this->belongsTo(City::class);
	}
	public function location() {
		return $this->belongsTo(Location::class);
	}
	public function office() {
		return $this->belongsTo(Office::class);
	}
	public function orders() {
		return $this->hasMany(Order::class)->orderBy('fecha_registro','desc');
	}
	public function user() {
		return $this->belongsTo(User::class);
	}
}
