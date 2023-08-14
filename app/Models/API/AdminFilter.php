<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $employee
 * @property int $shop
 * @property string $controller
 * @property string $action
 * @property string $filter
 * @property string $filter_id
 */
class AdminFilter extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_admin_filter';

    /**
     * @var array
     */
    protected $fillable = ['employee', 'shop', 'controller', 'action', 'filter', 'filter_id'];
}
