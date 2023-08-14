<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_supplier
 * @property int $id_lang
 * @property string $description
 * @property string $meta_title
 * @property string $meta_keywords
 * @property string $meta_description
 */
class SupplierLang extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_supplier_lang';

    /**
     * @var array
     */
    protected $fillable = ['description', 'meta_title', 'meta_keywords', 'meta_description'];
}
