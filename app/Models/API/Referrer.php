<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_referrer
 * @property string $name
 * @property string $passwd
 * @property string $http_referer_regexp
 * @property string $http_referer_like
 * @property string $request_uri_regexp
 * @property string $request_uri_like
 * @property string $http_referer_regexp_not
 * @property string $http_referer_like_not
 * @property string $request_uri_regexp_not
 * @property string $request_uri_like_not
 * @property float $base_fee
 * @property float $percent_fee
 * @property float $click_fee
 * @property string $date_add
 */
class Referrer extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_referrer';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_referrer';

    /**
     * @var array
     */
    protected $fillable = ['name', 'passwd', 'http_referer_regexp', 'http_referer_like', 'request_uri_regexp', 'request_uri_like', 'http_referer_regexp_not', 'http_referer_like_not', 'request_uri_regexp_not', 'request_uri_like_not', 'base_fee', 'percent_fee', 'click_fee', 'date_add'];
}
