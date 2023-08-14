<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_layered_filter
 * @property string $name
 * @property string $filters
 * @property int $n_categories
 * @property string $date_add
 */
class LayeredFilter extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_layered_filter';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_layered_filter';

    /**
     * @var array
     */
    protected $fillable = ['name', 'filters', 'n_categories', 'date_add'];
}
