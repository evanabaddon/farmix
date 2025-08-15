<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'blog_category_id',
        'title',
        'slug',
        'author',
        'featured_image',
        'body',
        'meta_description',
        'published_at',
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    protected $appends = ['tags'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(BlogCategory::class, 'blog_category_id');
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    public function getTagsAttribute(): array
    {
        return $this->tags()->pluck('name')->toArray();
    }

    public function setTagsAttribute(array $tags): void
    {
        // Temukan atau buat Tag baru
        $tagIds = [];
        foreach ($tags as $tagName) {
            $tag = Tag::firstOrCreate(['name' => $tagName, 'slug' => \Illuminate\Support\Str::slug($tagName)]);
            $tagIds[] = $tag->id;
        }

        // Sinkronkan relasi
        $this->tags()->sync($tagIds);
    }
}
