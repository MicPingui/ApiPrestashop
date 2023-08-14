<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_attachment
 * @property int $id_lang
 * @property string $name
 * @property string $description
 */
class AttachmentLang extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_attachment_lang';

    /**
     * @var array
     */
    protected $fillable = ['name', 'description'];
}
