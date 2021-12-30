<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['album_id', 'comment', 'member_id'];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }
    public function album()
    {
        return $this->belongsTo(Album::class);
    }

}
