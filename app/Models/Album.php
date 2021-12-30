<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'thumbnail', 'image', 'slug', 'member_id'];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
