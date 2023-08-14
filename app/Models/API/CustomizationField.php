<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_customization_field
 * @property int $id_product
 * @property boolean $type
 * @property boolean $required
 * @property boolean $is_module
 * @property boolean $is_deleted
 */
class CustomizationField extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_customization_field';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_customization_field';

    /**
     * @var array
     */
    protected $fillable = ['id_product', 'type', 'required', 'is_module', 'is_deleted'];
}
