<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_product
 * @property int $id_product_comment_criterion
 */
class ProductCommentCriterionProduct extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_product_comment_criterion_product';

    /**
     * @var array
     */
    protected $fillable = [];
}
