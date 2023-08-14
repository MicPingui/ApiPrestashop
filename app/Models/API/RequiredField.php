<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_required_field
 * @property string $object_name
 * @property string $field_name
 */
class RequiredField extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_required_field';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_required_field';

    /**
     * @var array
     */
    protected $fillable = ['object_name', 'field_name'];
}
