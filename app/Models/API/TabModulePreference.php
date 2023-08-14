<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_tab_module_preference
 * @property int $id_employee
 * @property int $id_tab
 * @property string $module
 */
class TabModulePreference extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_tab_module_preference';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_tab_module_preference';

    /**
     * @var array
     */
    protected $fillable = ['id_employee', 'id_tab', 'module'];
}
