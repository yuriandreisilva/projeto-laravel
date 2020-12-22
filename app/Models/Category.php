<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';

    public function posts(){
        return $this->belongsToMany(Post::class, 'posts_categories', 'post_id', 'categories_id');
    }

}
