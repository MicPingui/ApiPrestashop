<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_web_browser
 * @property string $name
 */
class WebBrowser extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_web_browser';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_web_browser';

    /**
     * @var array
     */
    protected $fillable = ['name'];
}
