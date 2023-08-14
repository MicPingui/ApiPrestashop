<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_product_comment
 * @property int $id_customer
 * @property boolean $usefulness
 */
class ProductCommentUsefulness extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_product_comment_usefulness';

    /**
     * @var array
     */
    protected $fillable = ['usefulness'];
}
