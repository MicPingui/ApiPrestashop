<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_meta
 * @property int $id_shop
 * @property int $id_lang
 * @property string $title
 * @property string $description
 * @property string $keywords
 * @property string $url_rewrite
 */
class MetaLang extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_meta_lang';

    /**
     * @var array
     */
    protected $fillable = ['title', 'description', 'keywords', 'url_rewrite'];
}
