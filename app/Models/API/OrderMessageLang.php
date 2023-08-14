<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_order_message
 * @property int $id_lang
 * @property string $name
 * @property string $message
 */
class OrderMessageLang extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_order_message_lang';

    /**
     * @var array
     */
    protected $fillable = ['name', 'message'];
}
