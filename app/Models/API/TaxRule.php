<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_tax_rule
 * @property int $id_tax_rules_group
 * @property int $id_country
 * @property int $id_state
 * @property string $zipcode_from
 * @property string $zipcode_to
 * @property int $id_tax
 * @property int $behavior
 * @property string $description
 */
class TaxRule extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_tax_rule';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_tax_rule';

    /**
     * @var array
     */
    protected $fillable = ['id_tax_rules_group', 'id_country', 'id_state', 'zipcode_from', 'zipcode_to', 'id_tax', 'behavior', 'description'];
}
