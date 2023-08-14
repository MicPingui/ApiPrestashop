<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_condition
 * @property int $id_advice
 * @property boolean $display
 */
class ConditionAdvice extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_condition_advice';

    /**
     * @var array
     */
    protected $fillable = ['display'];
}
