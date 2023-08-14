<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_order_return_state
 * @property int $id_lang
 * @property string $name
 */
class OrderReturnStateLang extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_order_return_state_lang';

    /**
     * @var array
     */
    protected $fillable = ['name'];
}
