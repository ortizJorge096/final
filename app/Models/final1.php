<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class final1
 * @package App\Models
 * @version November 20, 2018, 1:15 am UTC
 *
 * @property string Nombre
 * @property string Documento
 * @property string Correo
 * @property string Direccion
 * @property string Telefono
 * @property string Solicitud
 */
class final1 extends Model
{
    use SoftDeletes;

    public $table = 'final1s';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Nombre',
        'Documento',
        'Correo',
        'Direccion',
        'Telefono',
        'Solicitud'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Nombre' => 'string',
        'Documento' => 'string',
        'Correo' => 'string',
        'Direccion' => 'string',
        'Telefono' => 'string',
        'Solicitud' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Nombre' => 'required',
        'Documento' => 'required|numeric|min:6',
        'Correo' => 'required|email',
        'Direccion' => 'required',
        'Telefono' => 'required|numeric|min:7',
        'Solicitud' => 'required'
    ];

    
}
