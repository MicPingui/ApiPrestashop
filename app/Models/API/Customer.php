<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_customer
 * @property int $id_shop_group
 * @property int $id_shop
 * @property int $id_gender
 * @property int $id_default_group
 * @property int $id_lang
 * @property int $id_risk
 * @property string $company
 * @property string $siret
 * @property string $ape
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 * @property string $passwd
 * @property string $last_passwd_gen
 * @property string $birthday
 * @property boolean $newsletter
 * @property string $ip_registration_newsletter
 * @property string $newsletter_date_add
 * @property boolean $optin
 * @property string $website
 * @property float $outstanding_allow_amount
 * @property boolean $show_public_prices
 * @property int $max_payment_days
 * @property string $secure_key
 * @property string $note
 * @property boolean $active
 * @property boolean $is_guest
 * @property boolean $deleted
 * @property string $date_add
 * @property string $date_upd
 * @property string $reset_password_token
 * @property string $reset_password_validity
 * @property string $RUT
 */
class Customer extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_customer';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_customer';

    /**
     * @var array
     */
    protected $fillable = ['id_shop_group', 'id_shop', 'id_gender', 'id_default_group', 'id_lang', 'id_risk', 'company', 'siret', 'ape', 'firstname', 'lastname', 'email', 'passwd', 'last_passwd_gen', 'birthday', 'newsletter', 'ip_registration_newsletter', 'newsletter_date_add', 'optin', 'website', 'outstanding_allow_amount', 'show_public_prices', 'max_payment_days', 'secure_key', 'note', 'active', 'is_guest', 'deleted', 'date_add', 'date_upd', 'reset_password_token', 'reset_password_validity', 'RUT'];
}
