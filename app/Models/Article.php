<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property int $user_id
 * @property string $title
 * @property string $content
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'user_id'
    ];

    public function user() :BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function images() :HasMany
    {
        return $this->hasMany(ArticleImage::class);
    }

    public static function hasUniqueTitle(string $title) :bool
    {
        return !boolval(Article::firstWhere('title','=',Ucwords(strtolower($title))));
    }
}
