<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_authorization_role
 * @property string $slug
 */
class AuthorizationRole extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_authorization_role';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_authorization_role';

    /**
     * @var array
     */
    protected $fillable = ['slug'];
}
