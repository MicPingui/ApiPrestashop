<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_order_state
 * @property int $id_lang
 * @property string $name
 * @property string $template
 */
class OrderStateLang extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_order_state_lang';

    /**
     * @var array
     */
    protected $fillable = ['name', 'template'];
}
