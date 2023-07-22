<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'short_description',
        'content',
        'status', 
        'image', 
        'seo_title',
        'seo_desc',
    ];

    public function comment()
    {
        return $this->belongsTo(Comment::class);
    }

}
