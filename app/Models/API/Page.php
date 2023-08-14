<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_page
 * @property int $id_page_type
 * @property int $id_object
 */
class Page extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_page';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_page';

    /**
     * @var array
     */
    protected $fillable = ['id_page_type', 'id_object'];
}
