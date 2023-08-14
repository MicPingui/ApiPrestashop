<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_employee_session
 * @property int $id_employee
 * @property string $token
 */
class EmployeeSession extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_employee_session';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_employee_session';

    /**
     * @var array
     */
    protected $fillable = ['id_employee', 'token'];
}
