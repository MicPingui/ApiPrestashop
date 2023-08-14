<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_tax
 * @property int $id_lang
 * @property string $name
 */
class TaxLang extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_tax_lang';

    /**
     * @var array
     */
    protected $fillable = ['name'];
}
