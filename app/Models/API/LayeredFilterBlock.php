<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $hash
 * @property string $data
 */
class LayeredFilterBlock extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_layered_filter_block';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'hash';

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
    protected $fillable = ['data'];
}
