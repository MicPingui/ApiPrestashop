<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_badge
 * @property int $id_lang
 * @property string $name
 * @property string $description
 * @property string $group_name
 */
class BadgeLang extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_badge_lang';

    /**
     * @var array
     */
    protected $fillable = ['name', 'description', 'group_name'];
}
