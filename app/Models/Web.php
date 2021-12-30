<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Web extends Model
{
    use HasFactory;

    protected $fillable = [
        'cover_image',
        'website_name',
        'album_pagination',
        'about_thumbnail_image',
        'about_website',
        'email',
        'phone',
        'github',
        'facebook',
        'instagram',
        'address',
        'footer_content',
    ];
}
