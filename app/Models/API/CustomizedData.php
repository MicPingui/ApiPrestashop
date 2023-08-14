<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_customization
 * @property boolean $type
 * @property int $index
 * @property string $value
 * @property int $id_module
 * @property float $price
 * @property float $weight
 */
class CustomizedData extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_customized_data';

    /**
     * @var array
     */
    protected $fillable = ['value', 'id_module', 'price', 'weight'];
}
