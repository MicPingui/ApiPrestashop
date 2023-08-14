<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_product_comment_criterion
 * @property int $id_lang
 * @property string $name
 */
class ProductCommentCriterionLang extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_product_comment_criterion_lang';

    /**
     * @var array
     */
    protected $fillable = ['name'];
}
