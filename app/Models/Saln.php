<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saln extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'date_of_birth',
        'position',
        'department',
        'agency',
        'email',
        'contact_number',
        'date_filed',
        'real_properties',
        'personal_properties',
        'total_assets',
        'liabilities',
        'net_worth',
        'business_interests',
        'financial_connections',
        'relatives_in_government',
    ];

    protected $casts = [
        'date_of_birth' => 'date',
        'date_filed' => 'date',
        'real_properties' => 'decimal:2',
        'personal_properties' => 'decimal:2',
        'total_assets' => 'decimal:2',
        'liabilities' => 'decimal:2',
        'net_worth' => 'decimal:2',
    ];
}
