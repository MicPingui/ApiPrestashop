<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_webservice_account
 * @property string $key
 * @property string $description
 * @property string $class_name
 * @property boolean $is_module
 * @property string $module_name
 * @property boolean $active
 */
class WebserviceAccount extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_webservice_account';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_webservice_account';

    /**
     * @var array
     */
    protected $fillable = ['key', 'description', 'class_name', 'is_module', 'module_name', 'active'];
}
