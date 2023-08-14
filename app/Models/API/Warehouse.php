<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_warehouse
 * @property int $id_currency
 * @property int $id_address
 * @property int $id_employee
 * @property string $reference
 * @property string $name
 * @property string $management_type
 * @property boolean $deleted
 */
class Warehouse extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_warehouse';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_warehouse';

    /**
     * @var array
     */
    protected $fillable = ['id_currency', 'id_address', 'id_employee', 'reference', 'name', 'management_type', 'deleted'];
}
