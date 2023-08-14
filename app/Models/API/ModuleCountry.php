<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_module
 * @property int $id_shop
 * @property int $id_country
 */
class ModuleCountry extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_module_country';

    /**
     * @var array
     */
    protected $fillable = [];
}
