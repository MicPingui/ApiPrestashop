<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_product_comment
 * @property int $id_product_comment_criterion
 * @property int $grade
 */
class ProductCommentGrade extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_product_comment_grade';

    /**
     * @var array
     */
    protected $fillable = ['grade'];
}
