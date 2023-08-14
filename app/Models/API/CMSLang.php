<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_cms
 * @property int $id_lang
 * @property int $id_shop
 * @property string $meta_title
 * @property string $head_seo_title
 * @property string $meta_description
 * @property string $meta_keywords
 * @property string $content
 * @property string $link_rewrite
 */
class CMSLang extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_cms_lang';

    /**
     * @var array
     */
    protected $fillable = ['meta_title', 'head_seo_title', 'meta_description', 'meta_keywords', 'content', 'link_rewrite'];
}
