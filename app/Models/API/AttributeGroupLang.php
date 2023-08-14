<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_attribute_group
 * @property int $id_lang
 * @property string $name
 * @property string $public_name
 */
class AttributeGroupLang extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_attribute_group_lang';

    /**
     * @var array
     */
    protected $fillable = ['name', 'public_name'];
}
