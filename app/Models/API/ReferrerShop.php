<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_referrer
 * @property int $id_shop
 * @property int $cache_visitors
 * @property int $cache_visits
 * @property int $cache_pages
 * @property int $cache_registrations
 * @property int $cache_orders
 * @property float $cache_sales
 * @property float $cache_reg_rate
 * @property float $cache_order_rate
 */
class ReferrerShop extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_referrer_shop';

    /**
     * @var array
     */
    protected $fillable = ['cache_visitors', 'cache_visits', 'cache_pages', 'cache_registrations', 'cache_orders', 'cache_sales', 'cache_reg_rate', 'cache_order_rate'];
}
