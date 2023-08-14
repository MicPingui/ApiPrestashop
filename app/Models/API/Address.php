<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_address
 * @property int $id_country
 * @property int $id_state
 * @property int $id_customer
 * @property int $id_manufacturer
 * @property int $id_supplier
 * @property int $id_warehouse
 * @property string $alias
 * @property string $company
 * @property string $lastname
 * @property string $firstname
 * @property string $address1
 * @property string $address2
 * @property string $postcode
 * @property string $city
 * @property string $other
 * @property string $phone
 * @property string $phone_mobile
 * @property string $vat_number
 * @property string $dni
 * @property string $date_add
 * @property string $date_upd
 * @property boolean $active
 * @property boolean $deleted
 */
class Address extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_address';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_address';

    /**
     * @var array
     */
    protected $fillable = ['id_country', 'id_state', 'id_customer', 'id_manufacturer', 'id_supplier', 'id_warehouse', 'alias', 'company', 'lastname', 'firstname', 'address1', 'address2', 'postcode', 'city', 'other', 'phone', 'phone_mobile', 'vat_number', 'dni', 'date_add', 'date_upd', 'active', 'deleted'];
}
