<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_cms_role
 * @property int $id_lang
 * @property int $id_shop
 * @property string $name
 */
class CMSRoleLang extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_cms_role_lang';

    /**
     * @var array
     */
    protected $fillable = ['name'];
}
