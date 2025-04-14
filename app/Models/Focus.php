<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @class Focus
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Focus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Focus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Focus query()
 * @mixin \Eloquent
 */
class Focus extends Model
{
    protected $table = 'focuses';

    public function nodes(): HasMany
    {
        return $this->hasMany(Node::class, 'focus_id', 'id');
    }
}
