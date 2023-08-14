<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_homeslider_slides
 * @property int $id_shop
 */
class Homeslider extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_homeslider';

    /**
     * @var array
     */
    protected $fillable = [];
}
