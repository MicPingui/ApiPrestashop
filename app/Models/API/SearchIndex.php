<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_product
 * @property int $id_word
 * @property integer $weight
 */
class SearchIndex extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_search_index';

    /**
     * @var array
     */
    protected $fillable = ['weight'];
}
