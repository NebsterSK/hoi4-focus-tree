<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $duration
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Node> $nodes
 * @property-read int|null $nodes_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Focus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Focus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Focus query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Focus whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Focus whereDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Focus whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Focus whereName($value)
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
