<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Feed extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'description',
        'pic'
    ];

    protected $appends = ['isLiked', 'totalComments'];

    public function getIsLikedAttribute()
    {
        return $this->feed_likes()->sum('is_liked');
    }

    public function getLikeStatusAttribute()
    {
        return $this->feed_likes()->where('user_id', Auth::user()->id)->value('is_liked');
    }
    

    public function getTotalCommentsAttribute()
    {
        return $this->comments()->count();    
    }
    
    // public function likes()
    // {
    //     return $this->hasMany(Feed_like::class, 'feed_id', 'id')->sum('is_liked');
    // }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function feed_likes()
    {
        return $this->hasMany(Feed_like::class, 'feed_id', 'id');
    }

       
    public function comments()
    {
       return $this->hasMany(Comment::class, 'feed_id', 'id');
    }
}
