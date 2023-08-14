<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_country
 * @property string $format
 */
class AddressFormat extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_address_format';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_country';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['format'];
}
