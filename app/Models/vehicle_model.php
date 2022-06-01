<?php

namespace App\Models;

use App\Http\Controllers\VehicleTypesController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehicle_model extends Model
{
    use HasFactory;

    protected $fillable = [
        'vehicle_model_nm',
        'vehicle_nm',
        'vehicle_types_id',
        'capacity',
        'driver_side',
        'mileage',
        'color',
        'year',
        'brand_id',
        'cost',

    ];

    public function Type()
    {
        return $this->belongsTo(vehicle_types::class, 'vehicle_types_id');
    }

    public function Brand()
    {
        return $this->belongsTo(brands::class, 'brand_id');
    }

    public function sales_invoice_details()
    {
        return $this->hasMany(sales_invoice_detail::class);
    }

}
