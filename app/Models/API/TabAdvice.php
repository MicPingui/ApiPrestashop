<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_tab
 * @property int $id_advice
 */
class TabAdvice extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_tab_advice';

    /**
     * @var array
     */
    protected $fillable = [];
}
