<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accounting extends Model
{
	use HasFactory;
	protected $fillable = [ 'monto', 'meter_inicial', 'meter_final', 'tipo', 'turn_id', 'report_id', 'hosepipe_id', 'user_id' ];
	public $timestamps = false;
}
