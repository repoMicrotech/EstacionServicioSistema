<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;
	protected $fillable = ['ci', 'nombre', 'licencia', 'estado', 'cliente_id'];
	public $timestamps = false;

	public function client() {
		return $this->belongsTo(Client::class);
	}
}
