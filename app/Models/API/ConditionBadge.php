<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_condition
 * @property int $id_badge
 */
class ConditionBadge extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_condition_badge';

    /**
     * @var array
     */
    protected $fillable = [];
}
