<?php

namespace App\Models\Website;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table = 'events';
    
    protected $fillable = ['title_en', 'title_ar', 'slug_en', 'slug_ar', 'description_en', 'description_ar', 'image'];

    public function event_images() {
        return $this->hasMany(EventImages::class, 'event_id');
    }
}
