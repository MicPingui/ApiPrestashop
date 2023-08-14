<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_tax
 * @property float $rate
 * @property boolean $active
 * @property boolean $deleted
 */
class Tax extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_tax';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_tax';

    /**
     * @var array
     */
    protected $fillable = ['rate', 'active', 'deleted'];
}
