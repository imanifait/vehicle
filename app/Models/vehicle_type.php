<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Vehicle;

class vehicle_type extends Model
{
    use HasFactory;
    protected $table = 'vehicle_type';
    protected $fillable = [
        'vehicle_type_description',
    ];

	/**
	 * @return mixed
	 */
	public function getFillable() {
		return $this->fillable;
	}
	
	/**
	 * @param mixed $fillable 
	 * @return self
	 */
	public function setFillable($fillable): self {
		$this->fillable = $fillable;
		return $this;
	}
	public function Vehicle(){
		return $this->hasMany(Vehicle::class);
	}
}
