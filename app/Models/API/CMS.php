<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_cms
 * @property int $id_cms_category
 * @property int $position
 * @property boolean $active
 * @property boolean $indexation
 */
class CMS extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_cms';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_cms';

    /**
     * @var array
     */
    protected $fillable = ['id_cms_category', 'position', 'active', 'indexation'];
}
