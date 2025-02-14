<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Blog extends Model implements HasMedia
{
    use InteractsWithMedia;
    /** @use HasFactory<\Database\Factories\BlogFactory> */
    use HasFactory;



    use HasSlug;


    protected $fillable = [
        'slug',
        'title',
        'description',
        'category_id',
        'description',
        'user_id',
        'content',
        'published_at',
        'is_published',
    ];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }


    public function Category(){
        return $this->belongsTo(Category::class);
    }




}
