<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_employee
 * @property int $id_shop
 */
class EmployeeShop extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_employee_shop';

    /**
     * @var array
     */
    protected $fillable = [];
}
