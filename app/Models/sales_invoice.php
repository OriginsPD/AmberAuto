<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sales_invoice extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'customer_id',
        'invoice_dt',
        'invoice_nbr',
        'invoice_type',
    ];

    public function customers()
    {
        return $this->belongsTo(customer::class,'customer_id','id');
    }

    public function sales_invoice_details()
    {
        return $this->hasMany(sales_invoice_detail::class);
    }
}
