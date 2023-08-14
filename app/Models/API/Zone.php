<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_zone
 * @property string $name
 * @property boolean $active
 */
class Zone extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_zone';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_zone';

    /**
     * @var array
     */
    protected $fillable = ['name', 'active'];
}
