<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'office',
        'fname',
        'mname',
        'lname',
        'suffix',
        'date_filing',
        'position',
        'salary',
        'approved_by',
        'designation'
    ];

    public function user(){
        return $this->hasOne(User::class);
    }
}
