<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ManualReceipt extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'OR_NUMBER', 'PAYOR', 'COLL', 'CODE', 'AMOUNT', 'TOTAL', 'REMARKS', 'REPORT_DATE'
    ];

    // defining relationships
}
