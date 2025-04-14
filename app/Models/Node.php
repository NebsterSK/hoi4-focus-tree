<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @calss Node
 *
 * @property int $id
 * @property int $focus_id
 * @property int $country_id
 * @property int $position_x
 * @property int $position_y
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Node newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Node newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Node query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Node whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Node whereFocusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Node whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Node wherePositionX($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Node wherePositionY($value)
 *
 * @mixin \Eloquent
 */
class Node extends Model
{
    protected $table = 'nodes';

    public function focus(): BelongsTo
    {
        return $this->belongsTo(Focus::class, 'focus_id', 'id');
    }

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }
}
