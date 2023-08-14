<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_manufacturer
 * @property string $name
 * @property string $date_add
 * @property string $date_upd
 * @property boolean $active
 */
class Manufacturer extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_manufacturer';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_manufacturer';

    /**
     * @var array
     */
    protected $fillable = ['name', 'date_add', 'date_upd', 'active'];
}
