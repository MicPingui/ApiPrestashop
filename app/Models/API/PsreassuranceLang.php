<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_psreassurance
 * @property int $id_lang
 * @property string $title
 * @property string $description
 * @property string $link
 */
class PsreassuranceLang extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_psreassurance_lang';

    /**
     * @var array
     */
    protected $fillable = ['title', 'description', 'link'];
}
