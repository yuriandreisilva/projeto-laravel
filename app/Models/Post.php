<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected $table = 'post';

    protected $fillable = [
        'title',
        'subtitle',
        'content'
    ];

    // Este método será usado automaticamente
    // toda vez que tentar setar um title,
    public function setTitleAttribute($value){
        // Segurança
        // Isso é o que sempre acontece todas as vezes
        // no modelo
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function categories(){
        return $this->belongsToMany(Category::class, 'posts_categories', 'post_id', 'categories_id');
    }
}
