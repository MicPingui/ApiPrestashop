<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_customization_field
 * @property int $id_lang
 * @property int $id_shop
 * @property string $name
 */
class CustomizationFieldLang extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_customization_field_lang';

    /**
     * @var array
     */
    protected $fillable = ['name'];
}
