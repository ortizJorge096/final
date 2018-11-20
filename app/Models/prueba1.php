<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class prueba1
 * @package App\Models
 * @version November 19, 2018, 11:49 pm UTC
 *
 * @property string Nombre
 * @property string Cedula
 */
class prueba1 extends Model
{
    use SoftDeletes;

    public $table = 'prueba1s';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Nombre',
        'Cedula'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Nombre' => 'string',
        'Cedula' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Nombre' => 'required',
        'Cedula' => 'required|numeric|min:6'
    ];

    
}
