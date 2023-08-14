<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_shop_url
 * @property int $id_shop
 * @property string $domain
 * @property string $domain_ssl
 * @property string $physical_uri
 * @property string $virtual_uri
 * @property boolean $main
 * @property boolean $active
 */
class ShopUrl extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_shop_url';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_shop_url';

    /**
     * @var array
     */
    protected $fillable = ['id_shop', 'domain', 'domain_ssl', 'physical_uri', 'virtual_uri', 'main', 'active'];
}
