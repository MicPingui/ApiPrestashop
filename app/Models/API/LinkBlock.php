<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_link_block
 * @property int $id_hook
 * @property int $position
 * @property string $content
 */
class LinkBlock extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_link_block';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_link_block';

    /**
     * @var array
     */
    protected $fillable = ['id_hook', 'position', 'content'];
}
