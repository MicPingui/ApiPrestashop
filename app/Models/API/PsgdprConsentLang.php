<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_gdpr_consent
 * @property int $id_lang
 * @property int $id_shop
 * @property string $message
 */
class PsgdprConsentLang extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_psgdpr_consent_lang';

    /**
     * @var array
     */
    protected $fillable = ['message'];
}
