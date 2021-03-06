<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = ['image', 'name', 'username', 'password', 'gender', 'address', 'phone', 'status', 'verify', 'verified_at'];

    protected $hidden = [
        'password',
    ];

    public function c()
    {
        return $this->hasMany(Album::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
