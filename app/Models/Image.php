<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $caption
 * @property string $url
 * @property int $x
 * @property int $y
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'caption',
        'url',
        'x',
        'y'
    ];
}
