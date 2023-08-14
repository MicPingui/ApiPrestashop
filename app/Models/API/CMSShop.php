<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_cms
 * @property int $id_shop
 */
class CMSShop extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_cms_shop';

    /**
     * @var array
     */
    protected $fillable = [];
}
