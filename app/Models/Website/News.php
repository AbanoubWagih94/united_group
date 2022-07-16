<?php

namespace App\Models\Website;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';
    
    protected $fillable = ['title_en', 'title_ar', 'slug_en', 'slug_ar', 'description_en', 'description_ar', 'image'];
}
