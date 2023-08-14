<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_gdpr_consent
 * @property int $id_module
 * @property int $active
 * @property int $error
 * @property string $error_message
 * @property string $date_add
 * @property string $date_upd
 */
class PsgdprConsent extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_psgdpr_consent';

    /**
     * @var array
     */
    protected $fillable = ['active', 'error', 'error_message', 'date_add', 'date_upd'];
}
