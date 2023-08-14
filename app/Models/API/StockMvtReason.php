<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_stock_mvt_reason
 * @property boolean $sign
 * @property string $date_add
 * @property string $date_upd
 * @property boolean $deleted
 */
class StockMvtReason extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_stock_mvt_reason';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_stock_mvt_reason';

    /**
     * @var array
     */
    protected $fillable = ['sign', 'date_add', 'date_upd', 'deleted'];
}
