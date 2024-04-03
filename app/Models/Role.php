<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property string $name
 */
class Role extends Model
{
    const ADMIN_ROLE = 1;
    const GUEST_ROLE = 2;

    const DEFAULT_ROLE = Role::GUEST_ROLE;

    use HasFactory;

    protected $fillable = [
      'name'
    ];

    public $timestamps = false;

    public function users() :HasMany
    {
        return $this->hasMany(User::class);
    }
}
