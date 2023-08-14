<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_info
 * @property int $id_shop
 */
class InfoShop extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_info_shop';

    /**
     * @var array
     */
    protected $fillable = [];
}
