<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feed extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'description',
        'pic'
    ];

    public function user()
    {
        $this->belongsTo(User::class, 'user_id', 'id');
    }
}
