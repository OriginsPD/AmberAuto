<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sales_ticket extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'ticket_nbr',
        'created_dt',
        'customer_id',
        'sales_rep_id',
        'ticket_status',
    ];

    public function customers()
    {
        return $this->belongsTo(customer::class);
    }

    public function sales_docs()
    {
        return $this->hasMany(sales_doc::class);
    }
}
