<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_country
 * @property int $id_zone
 * @property int $id_currency
 * @property string $iso_code
 * @property int $call_prefix
 * @property boolean $active
 * @property boolean $contains_states
 * @property boolean $need_identification_number
 * @property boolean $need_zip_code
 * @property string $zip_code_format
 * @property boolean $display_tax_label
 */
class Country extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_country';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_country';

    /**
     * @var array
     */
    protected $fillable = ['id_zone', 'id_currency', 'iso_code', 'call_prefix', 'active', 'contains_states', 'need_identification_number', 'need_zip_code', 'zip_code_format', 'display_tax_label'];
}
