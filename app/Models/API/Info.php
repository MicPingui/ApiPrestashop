<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_info
 */
class Info extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_info';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_info';

    /**
     * @var array
     */
    protected $fillable = [];
}
