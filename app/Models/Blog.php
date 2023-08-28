<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'content', 'image'];

    // Define relationships if needed
    // For example, if you have a user_id column indicating the author of the post
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
