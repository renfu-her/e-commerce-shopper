<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        'title',
        'category_id',
        'content',
        'sort_order',
        'is_active',
        'views',
        'seo_title',
        'seo_keywords',
        'seo_description',
        'image',
    ];

    public function category()
    {
        return $this->belongsTo(PostCategory::class, 'category_id');
    }
}
