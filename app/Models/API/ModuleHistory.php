<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $id_employee
 * @property int $id_module
 * @property string $date_add
 * @property string $date_upd
 */
class ModuleHistory extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_module_history';

    /**
     * @var array
     */
    protected $fillable = ['id_employee', 'id_module', 'date_add', 'date_upd'];
}
