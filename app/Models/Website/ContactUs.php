<?php

namespace App\Models\Website;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;

    protected $tables = 'contact_us';

    protected $fillable = ['email', 'mobile', 'address', 'office_hours', 'facebook_link', 'twitter_link', 'instagram_link', 'linkedin_link', 'youtube_link', 'map_link'];
}
