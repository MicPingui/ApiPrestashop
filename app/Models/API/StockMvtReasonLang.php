<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_stock_mvt_reason
 * @property int $id_lang
 * @property string $name
 */
class StockMvtReasonLang extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_stock_mvt_reason_lang';

    /**
     * @var array
     */
    protected $fillable = ['name'];
}
