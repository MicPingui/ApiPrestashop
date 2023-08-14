<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_link_block
 * @property int $id_lang
 * @property string $name
 * @property string $custom_content
 */
class LinkBlockLang extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_link_block_lang';

    /**
     * @var array
     */
    protected $fillable = ['name', 'custom_content'];
}
