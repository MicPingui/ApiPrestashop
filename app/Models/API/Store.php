<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_store
 * @property int $id_country
 * @property int $id_state
 * @property string $city
 * @property string $postcode
 * @property float $latitude
 * @property float $longitude
 * @property string $phone
 * @property string $fax
 * @property string $email
 * @property boolean $active
 * @property string $date_add
 * @property string $date_upd
 */
class Store extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_store';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_store';

    /**
     * @var array
     */
    protected $fillable = ['id_country', 'id_state', 'city', 'postcode', 'latitude', 'longitude', 'phone', 'fax', 'email', 'active', 'date_add', 'date_upd'];
}
