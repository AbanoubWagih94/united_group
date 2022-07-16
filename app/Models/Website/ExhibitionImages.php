<?php

namespace App\Models\Website;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExhibitionImages extends Model
{
    use HasFactory;

    protected $table = 'exhibition_images';
    
    protected $fillable = ['exhibition_id', 'image'];

    public function exhibition() {
        return $this->belongsTo(Exhibition::class, 'exhibition_id');
    }
}
