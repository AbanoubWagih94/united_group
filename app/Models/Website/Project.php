<?php

namespace App\Models\Website;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';
    
    protected $fillable = ['title_en', 'title_ar', 'slug_en', 'slug_ar', 'description_en', 'description_ar', 'image', 'video', 'location'];

    public function project_images() {
        return $this->hasMany(ProjectImages::class, 'project_id');
    }
}
