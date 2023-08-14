<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_import_match
 * @property string $name
 * @property string $match
 * @property int $skip
 */
class ImportMatch extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_import_match';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_import_match';

    /**
     * @var array
     */
    protected $fillable = ['name', 'match', 'skip'];
}
