<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
    use SoftDeletes;
	protected $table = "people";
	protected $fillable = ['id', 'ci', 'nombre', 'direccion', 'telefono', 'telefono2', 'location_id', 'city_id', 'office_id'];
	public $timestamps = false;
	
	public function location(){
		return $this->belongsTo(Location::class);
	}
	public function city(){
		return $this->belongsTo(City::class);
	}
	public function office(){
		return $this->belongsTo(Office::class);
	}
    public function user() {
        return $this->hasOne(User::class,'id');
    }
}
