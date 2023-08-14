<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_hook
 * @property string $name
 * @property string $title
 * @property string $description
 * @property boolean $active
 * @property boolean $position
 */
class Hook extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_hook';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_hook';

    /**
     * @var array
     */
    protected $fillable = ['name', 'title', 'description', 'active', 'position'];
}
