<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_currency
 * @property int $id_lang
 * @property string $name
 * @property string $symbol
 * @property string $pattern
 */
class CurrencyLang extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_currency_lang';

    /**
     * @var array
     */
    protected $fillable = ['name', 'symbol', 'pattern'];
}
