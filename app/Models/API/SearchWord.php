<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_word
 * @property int $id_shop
 * @property int $id_lang
 * @property string $word
 */
class SearchWord extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_search_word';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_word';

    /**
     * @var array
     */
    protected $fillable = ['id_shop', 'id_lang', 'word'];
}
