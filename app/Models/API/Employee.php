<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_employee
 * @property int $id_profile
 * @property int $id_lang
 * @property string $lastname
 * @property string $firstname
 * @property string $email
 * @property string $passwd
 * @property string $last_passwd_gen
 * @property string $stats_date_from
 * @property string $stats_date_to
 * @property string $stats_compare_from
 * @property string $stats_compare_to
 * @property int $stats_compare_option
 * @property string $preselect_date_range
 * @property string $bo_color
 * @property string $bo_theme
 * @property string $bo_css
 * @property int $default_tab
 * @property int $bo_width
 * @property boolean $bo_menu
 * @property boolean $active
 * @property boolean $optin
 * @property int $id_last_order
 * @property int $id_last_customer_message
 * @property int $id_last_customer
 * @property string $last_connection_date
 * @property string $reset_password_token
 * @property string $reset_password_validity
 * @property boolean $has_enabled_gravatar
 */
class Employee extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_employee';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_employee';

    /**
     * @var array
     */
    protected $fillable = ['id_profile', 'id_lang', 'lastname', 'firstname', 'email', 'passwd', 'last_passwd_gen', 'stats_date_from', 'stats_date_to', 'stats_compare_from', 'stats_compare_to', 'stats_compare_option', 'preselect_date_range', 'bo_color', 'bo_theme', 'bo_css', 'default_tab', 'bo_width', 'bo_menu', 'active', 'optin', 'id_last_order', 'id_last_customer_message', 'id_last_customer', 'last_connection_date', 'reset_password_token', 'reset_password_validity', 'has_enabled_gravatar'];
}
