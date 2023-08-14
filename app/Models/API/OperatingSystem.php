<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_operating_system
 * @property string $name
 */
class OperatingSystem extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_operating_system';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_operating_system';

    /**
     * @var array
     */
    protected $fillable = ['name'];
}
