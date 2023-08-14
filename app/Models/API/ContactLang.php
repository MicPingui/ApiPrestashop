<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_contact
 * @property int $id_lang
 * @property string $name
 * @property string $description
 */
class ContactLang extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_contact_lang';

    /**
     * @var array
     */
    protected $fillable = ['name', 'description'];
}
