<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_badge
 * @property int $id_ps_badge
 * @property string $type
 * @property int $id_group
 * @property int $group_position
 * @property int $scoring
 * @property int $awb
 * @property boolean $validated
 */
class Badge extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_badge';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_badge';

    /**
     * @var array
     */
    protected $fillable = ['id_ps_badge', 'type', 'id_group', 'group_position', 'scoring', 'awb', 'validated'];
}
