<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_product_comment_criterion
 * @property boolean $id_product_comment_criterion_type
 * @property boolean $active
 */
class ProductCommentCriterion extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_product_comment_criterion';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_product_comment_criterion';

    /**
     * @var array
     */
    protected $fillable = ['id_product_comment_criterion_type', 'active'];
}
