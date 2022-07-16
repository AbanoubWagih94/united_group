<?php

namespace App\Models\Website;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventImages extends Model
{
    use HasFactory;

    protected $table = 'event_images';
    
    protected $fillable = ['event_id', 'image'];

    public function event() {
        return $this->belongsTo(Event::class, 'event_id');
    }
}
