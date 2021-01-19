<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'reportes';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tipo_reporte', 'Asunto'];

    
}
