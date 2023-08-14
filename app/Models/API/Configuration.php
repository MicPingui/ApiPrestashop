<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_configuration
 * @property int $id_shop_group
 * @property int $id_shop
 * @property string $name
 * @property string $value
 * @property string $date_add
 * @property string $date_upd
 */
class Configuration extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_configuration';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_configuration';

    /**
     * @var array
     */
    protected $fillable = ['id_shop_group', 'id_shop', 'name', 'value', 'date_add', 'date_upd'];
}
