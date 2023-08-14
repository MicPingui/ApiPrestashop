<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_advice
 * @property int $id_lang
 * @property string $html
 */
class AdviceLang extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_advice_lang';

    /**
     * @var array
     */
    protected $fillable = ['html'];
}
