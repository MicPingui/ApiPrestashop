<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_tab
 * @property int $id_lang
 * @property string $name
 */
class TabLang extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_tab_lang';

    /**
     * @var array
     */
    protected $fillable = ['name'];
}
