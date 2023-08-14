<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $link
 * @property int $id_shop
 */
class GSitemapSitemap extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_gsitemap_sitemap';

    /**
     * @var array
     */
    protected $fillable = ['link', 'id_shop'];
}
