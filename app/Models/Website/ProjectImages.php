<?php

namespace App\Models\Website;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectImages extends Model
{
    use HasFactory;

    protected $table = 'project_images';
    
    protected $fillable = ['project_id', 'image'];

    public function project() {
        return $this->belongsTo(Project::class, 'project_id');
    }
}
