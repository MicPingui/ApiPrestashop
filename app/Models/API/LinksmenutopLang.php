<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_linksmenutop
 * @property int $id_lang
 * @property int $id_shop
 * @property string $label
 * @property string $link
 */
class LinksmenutopLang extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_linksmenutop_lang';

    /**
     * @var array
     */
    protected $fillable = ['id_linksmenutop', 'id_lang', 'id_shop', 'label', 'link'];
}
