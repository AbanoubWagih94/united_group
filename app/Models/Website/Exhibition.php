<?php

namespace App\Models\Website;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exhibition extends Model
{
    use HasFactory;

    protected $table = 'exhibitions';
    
    protected $fillable = ['title_en', 'title_ar', 'slug_en', 'slug_ar', 'description_en', 'description_ar', 'image'];

    public function exhibition_images() {
        return $this->hasMany(ExhibitionImages::class, 'exhibition_id');
    }
}
