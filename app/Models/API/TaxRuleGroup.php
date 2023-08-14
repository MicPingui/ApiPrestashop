<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_tax_rules_group
 * @property string $name
 * @property int $active
 * @property boolean $deleted
 * @property string $date_add
 * @property string $date_upd
 */
class TaxRuleGroup extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_tax_rules_group';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_tax_rules_group';

    /**
     * @var array
     */
    protected $fillable = ['name', 'active', 'deleted', 'date_add', 'date_upd'];
}
