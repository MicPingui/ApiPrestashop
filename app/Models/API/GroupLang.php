<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_group
 * @property int $id_lang
 * @property string $name
 */
class GroupLang extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_group_lang';

    /**
     * @var array
     */
    protected $fillable = ['name'];
}
