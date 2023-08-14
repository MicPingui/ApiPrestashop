<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_customer
 * @property int $id_group
 */
class CustomerGroup extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_customer_group';

    /**
     * @var array
     */
    protected $fillable = [];
}
