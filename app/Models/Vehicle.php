<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\vehicle_type;

class Vehicle extends Model
{
    use HasFactory;
    protected $table = 'vehicles';
    protected $fillable = [
		'vehicle_type_id',
        'capacity',
        'numberplate',
    ];
	 public function vehicle_type(){
	 	return $this->belongsTo(vehicle_type::class);
	 }

	/**
	 * @return mixed
	 */
	/**
	 * @param mixed $fillable 
	 * @return self
	 */
	public function setFillable($fillable): self {
		$this->fillable = $fillable;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getFillable() {
		return $this->fillable;
	}
	
	/**
	 * @param mixed $fillable;
	 * @return self
	 */
	
}
