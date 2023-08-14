<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_alias
 * @property string $alias
 * @property string $search
 * @property boolean $active
 */
class Alias extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_alias';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_alias';

    /**
     * @var array
     */
    protected $fillable = ['alias', 'search', 'active'];
}
