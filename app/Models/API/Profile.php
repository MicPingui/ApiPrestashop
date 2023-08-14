<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_profile
 */
class Profile extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_profile';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_profile';

    /**
     * @var array
     */
    protected $fillable = [];
}
