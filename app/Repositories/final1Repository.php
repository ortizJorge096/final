<?php

namespace App\Repositories;

use App\Models\final1;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class final1Repository
 * @package App\Repositories
 * @version November 20, 2018, 1:15 am UTC
 *
 * @method final1 findWithoutFail($id, $columns = ['*'])
 * @method final1 find($id, $columns = ['*'])
 * @method final1 first($columns = ['*'])
*/
class final1Repository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Nombre',
        'Documento',
        'Correo',
        'Direccion',
        'Telefono',
        'Solicitud'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return final1::class;
    }
}
