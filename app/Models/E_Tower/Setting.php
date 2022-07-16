<?php

namespace App\Models\E_Tower;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $tables = 'settings';

    protected $guarded = [];
}
