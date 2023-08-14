<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_gender
 * @property boolean $type
 */
class Gender extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_gender';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_gender';

    /**
     * @var array
     */
    protected $fillable = ['type'];
}
