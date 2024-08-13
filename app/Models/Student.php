<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'std',
        'name_ar',
        'name_en',
        'email',
        'phone',
        'dob',
        'address',
        'image',
        'is_active',
    ];
}
