<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Summary extends Model
{
    use HasFactory;

    protected $fillable = [
        'DESCRIPTION', 'CODE', 'AMOUNT', 'REPORT_DATE'
    ];

    // defining relationships
}
