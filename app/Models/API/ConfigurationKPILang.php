<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_configuration_kpi
 * @property int $id_lang
 * @property string $value
 * @property string $date_upd
 */
class ConfigurationKPILang extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_configuration_kpi_lang';

    /**
     * @var array
     */
    protected $fillable = ['value', 'date_upd'];
}
