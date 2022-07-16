<?php

namespace App\Models\Website;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;

    protected $table = 'careers';
    
    protected $fillable = ['name', 'email', 'phone', 'graduation_year', 'current_salary', 'expected_salary', 'cv'];
}
