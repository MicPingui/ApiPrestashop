<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $md5_header
 */
class CustomerMessageSyncImap extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_customer_message_sync_imap';

    /**
     * @var array
     */
    protected $fillable = ['md5_header'];
}
