<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_page_type
 * @property string $name
 */
class PageType extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_page_type';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_page_type';

    /**
     * @var array
     */
    protected $fillable = ['name'];
}
