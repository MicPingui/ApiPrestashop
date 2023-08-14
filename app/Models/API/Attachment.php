<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_attachment
 * @property string $file
 * @property string $file_name
 * @property integer $file_size
 * @property string $mime
 */
class Attachment extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_attachment';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_attachment';

    /**
     * @var array
     */
    protected $fillable = ['file', 'file_name', 'file_size', 'mime'];
}
