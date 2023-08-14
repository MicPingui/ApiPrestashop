<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_psreassurance
 * @property string $icon
 * @property string $custom_icon
 * @property int $status
 * @property int $position
 * @property int $type_link
 * @property int $id_cms
 * @property string $date_add
 * @property string $date_upd
 */
class Psreassurance extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_psreassurance';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_psreassurance';

    /**
     * @var array
     */
    protected $fillable = ['icon', 'custom_icon', 'status', 'position', 'type_link', 'id_cms', 'date_add', 'date_upd'];
}
