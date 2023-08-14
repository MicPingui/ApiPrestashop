<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_supplier
 * @property string $name
 * @property string $date_add
 * @property string $date_upd
 * @property boolean $active
 */
class Supplier extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_supplier';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_supplier';

    /**
     * @var array
     */
    protected $fillable = ['name', 'date_add', 'date_upd', 'active'];
}
