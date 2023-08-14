<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_homeslider_slides
 * @property int $position
 * @property boolean $active
 */
class HomesliderSlides extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_homeslider_slides';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_homeslider_slides';

    /**
     * @var array
     */
    protected $fillable = ['position', 'active'];
}
