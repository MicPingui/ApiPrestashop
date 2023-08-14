<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_currency
 * @property string $name
 * @property string $iso_code
 * @property string $numeric_iso_code
 * @property int $precision
 * @property float $conversion_rate
 * @property boolean $deleted
 * @property boolean $active
 * @property boolean $unofficial
 * @property boolean $modified
 */
class Currency extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_currency';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_currency';

    /**
     * @var array
     */
    protected $fillable = ['name', 'iso_code', 'numeric_iso_code', 'precision', 'conversion_rate', 'deleted', 'active', 'unofficial', 'modified'];
}
