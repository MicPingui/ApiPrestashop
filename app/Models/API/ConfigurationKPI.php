<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_configuration_kpi
 * @property int $id_shop_group
 * @property int $id_shop
 * @property string $name
 * @property string $value
 * @property string $date_add
 * @property string $date_upd
 */
class ConfigurationKPI extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_configuration_kpi';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_configuration_kpi';

    /**
     * @var array
     */
    protected $fillable = ['id_shop_group', 'id_shop', 'name', 'value', 'date_add', 'date_upd'];
}
