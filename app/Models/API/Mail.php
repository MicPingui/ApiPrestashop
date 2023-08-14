<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_mail
 * @property string $recipient
 * @property string $template
 * @property string $subject
 * @property int $id_lang
 * @property string $date_add
 */
class Mail extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_mail';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_mail';

    /**
     * @var array
     */
    protected $fillable = ['recipient', 'template', 'subject', 'id_lang', 'date_add'];
}
