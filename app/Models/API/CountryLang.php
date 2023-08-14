<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_country
 * @property int $id_lang
 * @property string $name
 */
class CountryLang extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_country_lang';

    /**
     * @var array
     */
    protected $fillable = ['name'];
}
