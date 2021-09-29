<?php

namespace App\Models;

use App\Http\Controllers\VehicleModelController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehicle_types extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'vehicle_types_nm',
    ];

    public function Model()
    {
        return $this->hasMany(vehicle_model::class, 'vehicle_types_id');
    }

}
