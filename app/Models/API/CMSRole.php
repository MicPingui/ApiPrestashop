<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_cms_role
 * @property int $id_cms
 * @property string $name
 */
class CMSRole extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_cms_role';

    /**
     * @var array
     */
    protected $fillable = ['name'];
}
