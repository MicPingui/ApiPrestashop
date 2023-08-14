<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_product_download
 * @property int $id_product
 * @property string $display_filename
 * @property string $filename
 * @property string $date_add
 * @property string $date_expiration
 * @property int $nb_days_accessible
 * @property int $nb_downloadable
 * @property boolean $active
 * @property boolean $is_shareable
 */
class ProductDownload extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_product_download';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_product_download';

    /**
     * @var array
     */
    protected $fillable = ['id_product', 'display_filename', 'filename', 'date_add', 'date_expiration', 'nb_days_accessible', 'nb_downloadable', 'active', 'is_shareable'];
}
