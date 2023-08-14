<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_attribute
 * @property int $id_lang
 * @property string $name
 */
class AttributeLang extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_attribute_lang';

    /**
     * @var array
     */
    protected $fillable = ['name'];
}
