<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_category
 * @property int $id_group
 */
class CategoryGroup extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_category_group';

    /**
     * @var array
     */
    protected $fillable = [];
}
