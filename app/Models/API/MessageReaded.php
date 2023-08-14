<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_message
 * @property int $id_employee
 * @property string $date_add
 */
class MessageReaded extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_message_readed';

    /**
     * @var array
     */
    protected $fillable = ['date_add'];
}
