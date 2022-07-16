<?php

namespace App\Models\Website;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUsDetail extends Model
{
    use HasFactory;

    protected $table = 'about_us_details';
    
    protected $fillable = ['title_en', 'title_ar', 'description_en', 'description_ar', 'button_en', 'button_ar', 'image'];
}
