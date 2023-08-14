<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_translation
 * @property int $id_lang
 * @property string $key
 * @property string $translation
 * @property string $domain
 * @property string $theme
 */
class Translation extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_translation';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_translation';

    /**
     * @var array
     */
    protected $fillable = ['id_lang', 'key', 'translation', 'domain', 'theme'];
}
