<?php

namespace App\Models\Website;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhyChooseUs extends Model
{
    use HasFactory;

    protected $table = 'why_choose_us';
    
    protected $fillable = ['title_en', 'title_ar', 'description_en', 'description_ar', 'image'];
}
