<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'feed_id',
        'comment_text',
        'parent_id'
    ];

    
    protected $appends = ['isLiked'];

    public function getIsLikedAttribute()
    {
        return $this->comment_likes()->sum('is_liked');
    }
    
    public function getPostCommentsAttribute()
    {
        return $this->where('parent_id', $this->id)->count();    
    }

    public function getLikeStatusAttribute()
    {
        return $this->comment_likes()->where('user_id', Auth::user()->id)->value('is_liked');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function feed()
    {
        return $this->belongsTo(Feed::class, 'feed_id', 'id');
    }
    
    public function comment_likes()
    {
        return $this->hasMany(CommentLikes::class, 'comment_id', 'id');
    }

    
    public function scopeRoot($query){
        $query->where('parent_id', 0);
    }

    public function children()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }
}
