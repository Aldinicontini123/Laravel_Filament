<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'posts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'thumbnail',
        'title',
        'color',
        'slug',
        'category_id',
        'content',
        'tags',
        'published',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'thumbnail' => 'string',
        'title' => 'string',
        'color' => 'string',
        'slug' => 'string',
        'category_id' => 'integer',
        'content' => 'string',
        'tags' => 'array',
        'published' => 'boolean',
    ];

    /**
     * Get the category that owns the post.
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
