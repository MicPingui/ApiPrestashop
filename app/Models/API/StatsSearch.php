<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_statssearch
 * @property int $id_shop
 * @property int $id_shop_group
 * @property string $keywords
 * @property int $results
 * @property string $date_add
 */
class StatsSearch extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_statssearch';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_statssearch';

    /**
     * @var array
     */
    protected $fillable = ['id_shop', 'id_shop_group', 'keywords', 'results', 'date_add'];
}
