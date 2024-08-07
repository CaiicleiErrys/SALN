<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appearance extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'fullname',
        'date_start',
        'date_end',
        'office',
        'venue',
        'venue_address',
        'purpose',
        // 'transport',
        // 'accommodation',
        // 'meals_breakfast',
        // 'meals_lunch',
        // 'meals_dinner',
        // 'transport_period',
        // 'accommodation_period',
        // 'breakfast_period',
        // 'lunch_period',
        // 'dinner_period',
        'approved_by',
        'designation',
    ];

    public function user(){
        return $this->hasOne(User::class);
    }
}
