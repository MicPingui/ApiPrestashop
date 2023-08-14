<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_product_comment
 * @property int $id_customer
 */
class ProductCommentReport extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_product_comment_report';

    /**
     * @var array
     */
    protected $fillable = [];
}
