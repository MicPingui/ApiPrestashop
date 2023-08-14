<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_homeslider_slides
 * @property int $id_lang
 * @property string $title
 * @property string $description
 * @property string $legend
 * @property string $url
 * @property string $image
 */
class HomesliderSlidesLang extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_homeslider_slides_lang';

    /**
     * @var array
     */
    protected $fillable = ['title', 'description', 'legend', 'url', 'image'];
}
