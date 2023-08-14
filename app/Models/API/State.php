<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_state
 * @property int $id_country
 * @property int $id_zone
 * @property string $name
 * @property string $iso_code
 * @property integer $tax_behavior
 * @property boolean $active
 */
class State extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_state';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_state';

    /**
     * @var array
     */
    protected $fillable = ['id_country', 'id_zone', 'name', 'iso_code', 'tax_behavior', 'active'];
}
