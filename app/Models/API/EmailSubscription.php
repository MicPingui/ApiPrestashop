<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $id_shop
 * @property int $id_shop_group
 * @property string $email
 * @property string $newsletter_date_add
 * @property string $ip_registration_newsletter
 * @property string $http_referer
 * @property boolean $active
 * @property int $id_lang
 */
class EmailSubscription extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_emailsubscription';

    /**
     * @var array
     */
    protected $fillable = ['id_shop', 'id_shop_group', 'email', 'newsletter_date_add', 'ip_registration_newsletter', 'http_referer', 'active', 'id_lang'];
}
