<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_linksmenutop
 * @property int $id_shop
 * @property boolean $new_window
 */
class Linksmenutop extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_linksmenutop';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_linksmenutop';

    /**
     * @var array
     */
    protected $fillable = ['id_shop', 'new_window'];
}
