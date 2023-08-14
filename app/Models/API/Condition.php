<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_condition
 * @property int $id_ps_condition
 * @property string $type
 * @property string $request
 * @property string $operator
 * @property string $value
 * @property string $result
 * @property string $calculation_type
 * @property string $calculation_detail
 * @property boolean $validated
 * @property string $date_add
 * @property string $date_upd
 */
class Condition extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_condition';

    /**
     * @var array
     */
    protected $fillable = ['type', 'request', 'operator', 'value', 'result', 'calculation_type', 'calculation_detail', 'validated', 'date_add', 'date_upd'];
}
