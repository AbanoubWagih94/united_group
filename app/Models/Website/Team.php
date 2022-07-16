<?php

namespace App\Models\Website;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $table = 'teams';
    
    protected $fillable = ['title_en', 'title_ar', 'description_en', 'description_ar', 'image'];
}
