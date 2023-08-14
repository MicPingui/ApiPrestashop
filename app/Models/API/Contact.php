<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_contact
 * @property string $email
 * @property boolean $customer_service
 * @property boolean $position
 */
class Contact extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_contact';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_contact';

    /**
     * @var array
     */
    protected $fillable = ['email', 'customer_service', 'position'];
}
