<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

class Project extends Model
{
    protected $fillable = [
        'title_id', 'title_en', 'title_ar',
        'slug_id', 'slug_en', 'slug_ar',
        'description_id', 'description_en', 'description_ar',
        'tech_stack', 'images', 'link_demo', 'link_repo',
        'category', 'order', 'is_published', 'is_featured',
    ];

    protected $casts = [
        'tech_stack' => 'array',
        'images' => 'array',
        'is_published' => 'boolean',
        'is_featured' => 'boolean',
        'order' => 'integer',
    ];

    public function scopePublished(Builder $query): Builder
    {
        return $query->where('is_published', true);
    }

    public function scopeFeatured(Builder $query): Builder
    {
        return $query->where('is_featured', true);
    }

    public function scopeOrdered(Builder $query): Builder
    {
        return $query->orderBy('order')->orderBy('created_at', 'desc');
    }

    public function getTitleAttribute(): string
    {
        $locale = app()->getLocale();
        $field = "title_{$locale}";
        return $this->{$field} ?? $this->title_id;
    }

    public function getDescriptionAttribute(): string
    {
        $locale = app()->getLocale();
        $field = "description_{$locale}";
        return $this->{$field} ?? $this->description_id;
    }

    public function getSlugAttribute(): string
    {
        $locale = app()->getLocale();
        $field = "slug_{$locale}";
        return $this->{$field} ?? $this->slug_id;
    }

    public static function generateSlug(string $title, string $locale): string
    {
        $slug = Str::slug($title);
        $field = "slug_{$locale}";
        $count = static::where($field, $slug)->count();
        
        return $count > 0 ? $slug . '-' . ($count + 1) : $slug;
    }
}
