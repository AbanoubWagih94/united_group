<?php

namespace App\Models\Website;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSlider extends Model
{
    use HasFactory;

    protected $table = 'home_sliders';
    
    protected $fillable = ['title_en', 'title_ar', 'description_en', 'description_ar', 'button_en', 'button_ar', 'image'];
}
