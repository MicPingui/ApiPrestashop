<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_quick_access
 * @property boolean $new_window
 * @property string $link
 */
class QuickAccess extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_quick_access';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_quick_access';

    /**
     * @var array
     */
    protected $fillable = ['new_window', 'link'];
}
