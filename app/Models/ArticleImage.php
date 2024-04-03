<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int $article_id
 * @property int $image_id
 */
class ArticleImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'article_id',
        'image_id'
    ];

    public function image() :BelongsTo
    {
        return $this->belongsTo(Image::class);
    }

    public function article() :BelongsTo
    {
        return $this->belongsTo(Article::class);
    }
}
