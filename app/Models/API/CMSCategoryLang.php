<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_cms_category
 * @property int $id_lang
 * @property int $id_shop
 * @property string $name
 * @property string $description
 * @property string $link_rewrite
 * @property string $meta_title
 * @property string $meta_keywords
 * @property string $meta_description
 */
class CMSCategoryLang extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_cms_category_lang';

    /**
     * @var array
     */
    protected $fillable = ['name', 'description', 'link_rewrite', 'meta_title', 'meta_keywords', 'meta_description'];
}
