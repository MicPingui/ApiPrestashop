<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_pagenotfound
 * @property int $id_shop
 * @property int $id_shop_group
 * @property string $request_uri
 * @property string $http_referer
 * @property string $date_add
 */
class PageNotFound extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_pagenotfound';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_pagenotfound';

    /**
     * @var array
     */
    protected $fillable = ['id_shop', 'id_shop_group', 'request_uri', 'http_referer', 'date_add'];
}
