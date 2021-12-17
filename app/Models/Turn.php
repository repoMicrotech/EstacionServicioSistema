<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turn extends Model
{
    use HasFactory;
	protected $fillable = ['dia_inicio', 'dia_fin', 'hour_id', 'user_id'];
	public $timestamps = false;

	public function hour() {
		return $this->belongsTo(Hour::class);
	}
	public function user() {
		return $this->belongsTo(User::class);
	}
}
