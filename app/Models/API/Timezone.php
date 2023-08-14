<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_timezone
 * @property string $name
 */
class Timezone extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_timezone';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_timezone';

    /**
     * @var array
     */
    protected $fillable = ['name'];
}
