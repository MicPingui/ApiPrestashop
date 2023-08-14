<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $type
 * @property int $offset
 * @property int $id_shop
 * @property string $lang_iso
 * @property boolean $full_sync_finished
 * @property string $last_sync_date
 */
class EventbusTypeSync extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_eventbus_type_sync';

    /**
     * @var array
     */
    protected $fillable = ['type', 'offset', 'id_shop', 'lang_iso', 'full_sync_finished', 'last_sync_date'];
}
