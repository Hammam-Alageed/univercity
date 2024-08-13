<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable = [
        'title_ar',
        'title_en',
        'content_ar',
        'content_en',
        'published_at',
        'image',
        'start_time',
        'end_time',
        'is_public',
        'is_active',
    ];
}
 
