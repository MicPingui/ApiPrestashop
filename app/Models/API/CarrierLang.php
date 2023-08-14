<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_carrier
 * @property int $id_shop
 * @property int $id_lang
 * @property string $delay
 */
class CarrierLang extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_carrier_lang';

    /**
     * @var array
     */
    protected $fillable = ['delay'];
}
