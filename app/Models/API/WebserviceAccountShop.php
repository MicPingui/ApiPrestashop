<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_webservice_account
 * @property int $id_shop
 */
class WebserviceAccountShop extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_webservice_account_shop';

    /**
     * @var array
     */
    protected $fillable = [];
}
