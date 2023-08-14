<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_guest
 * @property int $id_operating_system
 * @property int $id_web_browser
 * @property int $id_customer
 * @property boolean $javascript
 * @property integer $screen_resolution_x
 * @property integer $screen_resolution_y
 * @property boolean $screen_color
 * @property boolean $sun_java
 * @property boolean $adobe_flash
 * @property boolean $adobe_director
 * @property boolean $apple_quicktime
 * @property boolean $real_player
 * @property boolean $windows_media
 * @property string $accept_language
 * @property boolean $mobile_theme
 */
class Guest extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_guest';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_guest';

    /**
     * @var array
     */
    protected $fillable = ['id_operating_system', 'id_web_browser', 'id_customer', 'javascript', 'screen_resolution_x', 'screen_resolution_y', 'screen_color', 'sun_java', 'adobe_flash', 'adobe_director', 'apple_quicktime', 'real_player', 'windows_media', 'accept_language', 'mobile_theme'];
}
