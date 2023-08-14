<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_product_comment
 * @property int $id_product
 * @property int $id_customer
 * @property int $id_guest
 * @property string $title
 * @property string $content
 * @property string $customer_name
 * @property float $grade
 * @property boolean $validate
 * @property boolean $deleted
 * @property string $date_add
 */
class ProductComment extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_product_comment';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_product_comment';

    /**
     * @var array
     */
    protected $fillable = ['id_product', 'id_customer', 'id_guest', 'title', 'content', 'customer_name', 'grade', 'validate', 'deleted', 'date_add'];
}
