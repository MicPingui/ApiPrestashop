<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_store
 * @property int $id_lang
 * @property string $name
 * @property string $address1
 * @property string $address2
 * @property string $hours
 * @property string $note
 */
class StoreLang extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_store_lang';

    /**
     * @var array
     */
    protected $fillable = ['name', 'address1', 'address2', 'hours', 'note'];
}
