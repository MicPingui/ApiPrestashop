<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_group
 * @property int $id_shop
 */
class GroupShop extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_group_shop';

    /**
     * @var array
     */
    protected $fillable = [];
}
