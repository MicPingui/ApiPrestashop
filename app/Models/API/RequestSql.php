<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_request_sql
 * @property string $name
 * @property string $sql
 */
class RequestSql extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_request_sql';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_request_sql';

    /**
     * @var array
     */
    protected $fillable = ['name', 'sql'];
}
