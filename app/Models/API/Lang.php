<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_lang
 * @property string $name
 * @property boolean $active
 * @property string $iso_code
 * @property string $language_code
 * @property string $locale
 * @property string $date_format_lite
 * @property string $date_format_full
 * @property boolean $is_rtl
 */
class Lang extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_lang';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_lang';

    /**
     * @var array
     */
    protected $fillable = ['name', 'active', 'iso_code', 'language_code', 'locale', 'date_format_lite', 'date_format_full', 'is_rtl'];
}
