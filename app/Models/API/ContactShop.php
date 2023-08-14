<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_contact
 * @property int $id_shop
 */
class ContactShop extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_contact_shop';

    /**
     * @var array
     */
    protected $fillable = [];
}
