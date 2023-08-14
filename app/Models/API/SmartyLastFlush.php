<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $type
 * @property string $last_flush
 */
class SmartyLastFlush extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_smarty_last_flush';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'type';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['last_flush'];
}
