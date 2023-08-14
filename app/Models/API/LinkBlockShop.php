<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_link_block
 * @property int $id_shop
 * @property int $position
 */
class LinkBlockShop extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_link_block_shop';

    /**
     * @var array
     */
    protected $fillable = ['position'];
}
