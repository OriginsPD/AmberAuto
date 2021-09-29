<?php

namespace App\Models;

use App\Http\Controllers\VehicleTypesController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class brands extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'brand_nm',
        'brand_desc',
    ];

    public function Model()
    {
        return $this->hasMany(vehicle_model::class,'brand_id');
    }
}
