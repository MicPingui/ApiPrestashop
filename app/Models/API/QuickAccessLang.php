<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_quick_access
 * @property int $id_lang
 * @property string $name
 */
class QuickAccessLang extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_quick_access_lang';

    /**
     * @var array
     */
    protected $fillable = ['name'];
}
