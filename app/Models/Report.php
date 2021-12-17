<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
	protected $fillable = [ 'monto', 'efectivo', 'tarjeta', 'firmado', '200', '100', '50', '20', '10', 'monedas', 'user_id', 'turn_id' ];
	public $timestamps = false;

	public function user() {
		return $this->belongsTo(User::class);
	}
	public function turn() {
		return $this->belongsTo(Turn::class);
	}
}
