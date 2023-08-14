<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_lang
 * @property int $id_profile
 * @property string $name
 */
class ProfileLang extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_profile_lang';

    /**
     * @var array
     */
    protected $fillable = ['name'];
}
