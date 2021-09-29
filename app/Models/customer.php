<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'first_nm',
        'last_nm',
        'addr_In_1',
        'addr_In_2',
        'city_nm',
        'state_nm',
    ];

    public function sale_invoices()
    {
        return $this->hasMany(sales_invoice::class);
    }

    public function sales_tickets()
    {
        return $this->hasMany(sales_ticket::class);
    }
}
