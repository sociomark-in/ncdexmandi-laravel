<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FAQ extends Model
{
    protected $table = 'faq_content';
    protected $fillable = [
        'post_title',
        'post_content',
        'post_category',
        'post_tags',
        'post_author',
        'status'
    ];

    protected $casts = [
        'post_tags' => 'array', // Crucial: Casts the 'tags' JSON column to a PHP array
    ];

    protected $appends = [
        'formatted_tags', // To display formatted tag names
    ];

    public function category()
    {
        return $this->belongsTo(FAQCategory::class, 'faq_category');
    }

    public function actualTags()
    {
        $tagSlugsOrIds = $this->tags; // This is already a PHP array due to $casts

        if (empty($tagSlugsOrIds)) {
            return collect(); // Return an empty collection
        }

        // Assuming 'slug' is the column in your Tags table that matches your JSON array values
        // If your JSON array contains 'id's, use 'id' instead of 'slug'.
        return TagEntity::whereIn('id', $tagSlugsOrIds)->get();
    }

    public function getFormattedTagsAttribute(): array
    {
        // Check if 'actualTags' relationship (or similar dynamic property) is loaded,
        // or if you want to explicitly call the method to get tags.
        // For efficiency, when showing multiple FAQs, you'd typically eager load.
        $tags = $this->actualTags(); // This will run a query if not pre-loaded by some mechanism

        if ($tags->isNotEmpty()) {
            return $tags->pluck('name');
        }

        return [];
    }
}
