<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_gender
 * @property int $id_lang
 * @property string $name
 */
class GenderLang extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_gender_lang';

    /**
     * @var array
     */
    protected $fillable = ['name'];
}
