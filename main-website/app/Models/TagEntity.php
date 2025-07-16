<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TagEntity extends Model
{
    protected $table = 'post_tags';
    protected $fillable = [
        'name', 'slug'
    ];

    public function faqs()
    {
        return $this->hasMany(FAQ::class, 'tags', 'id');
    }
}
