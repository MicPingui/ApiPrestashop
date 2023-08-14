<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_search_engine
 * @property string $server
 * @property string $getvar
 */
class SearchEngine extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_search_engine';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_search_engine';

    /**
     * @var array
     */
    protected $fillable = ['server', 'getvar'];
}
