<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_risk
 * @property boolean $percent
 * @property string $color
 */
class Risk extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_risk';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_risk';

    /**
     * @var array
     */
    protected $fillable = ['percent', 'color'];
}
