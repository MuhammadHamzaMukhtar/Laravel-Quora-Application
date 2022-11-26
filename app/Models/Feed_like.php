<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feed_like extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'feed_id',
        'is_liked'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function feed()
    {
        return $this->belongsTo(Feed::class, 'feed_id', 'id');
    }

    public function feed_likes()
    {
        return $this->hasMany(Feed_like::class, 'user_id', 'id');
    }
}
