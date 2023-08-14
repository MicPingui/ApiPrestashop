<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_info
 * @property int $id_shop
 * @property int $id_lang
 * @property string $text
 */
class InfoLang extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_info_lang';

    /**
     * @var array
     */
    protected $fillable = ['text'];
}
