<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fuel extends Model
{
    use HasFactory;
	protected $fillable = ['nombre', 'precio', 'unidad'];
	public $timestamps = false;
}
