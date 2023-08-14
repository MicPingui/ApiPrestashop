<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_lang
 * @property int $id_shop
 */
class LangShop extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_lang_shop';

    /**
     * @var array
     */
    protected $fillable = [];
}
