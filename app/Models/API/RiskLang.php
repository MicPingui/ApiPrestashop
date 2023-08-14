<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_risk
 * @property int $id_lang
 * @property string $name
 */
class RiskLang extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_risk_lang';

    /**
     * @var array
     */
    protected $fillable = ['name'];
}
