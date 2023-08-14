<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_configuration
 * @property int $id_lang
 * @property string $value
 * @property string $date_upd
 */
class ConfigurationLang extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_configuration_lang';

    /**
     * @var array
     */
    protected $fillable = ['value', 'date_upd'];
}
