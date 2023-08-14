<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_product_comment_criterion
 * @property int $id_category
 */
class ProductCommentCriterionCategory extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_product_comment_criterion_category';

    /**
     * @var array
     */
    protected $fillable = [];
}
