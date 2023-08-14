<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_module_preference
 * @property int $id_employee
 * @property string $module
 * @property boolean $interest
 * @property boolean $favorite
 */
class ModulePreference extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_module_preference';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_module_preference';

    /**
     * @var array
     */
    protected $fillable = ['id_employee', 'module', 'interest', 'favorite'];
}
