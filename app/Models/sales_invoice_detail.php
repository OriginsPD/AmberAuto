<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sales_invoice_detail extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'sales_invoice_id',
        'vehicle_model_id',
        'quantity_amt',
        'cost_val',
        'discount_amt',
        'sales_price',
    ];

    public function sales_invoices()
    {
        return $this->belongsTo(sales_invoice::class);
    }

    public function vehicle_model()
    {
        return $this->belongsTo(vehicle_model::class);
    }
}
