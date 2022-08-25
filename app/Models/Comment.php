<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function author() //Might take author_id if unspecified, unlike post which would be post_id
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
