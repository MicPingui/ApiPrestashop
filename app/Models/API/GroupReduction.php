<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_group_reduction
 * @property int $id_group
 * @property int $id_category
 * @property float $reduction
 */
class GroupReduction extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_group_reduction';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_group_reduction';

    /**
     * @var array
     */
    protected $fillable = ['id_group', 'id_category', 'reduction'];
}
