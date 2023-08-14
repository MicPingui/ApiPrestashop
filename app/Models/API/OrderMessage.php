<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_order_message
 * @property string $date_add
 */
class OrderMessage extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_order_message';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_order_message';

    /**
     * @var array
     */
    protected $fillable = ['date_add'];
}
