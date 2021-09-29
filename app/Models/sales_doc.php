<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sales_doc extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'ticket_id',
        'doc_name',
        'submitted_dt',
        'doc_checked',
        'checked_by',
    ];

    public function sales_tickets()
    {
        return $this->belongsTo(sales_ticket::class);
    }
}
