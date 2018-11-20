<?php

namespace App\Repositories;

use App\Models\prueba1;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class prueba1Repository
 * @package App\Repositories
 * @version November 19, 2018, 11:49 pm UTC
 *
 * @method prueba1 findWithoutFail($id, $columns = ['*'])
 * @method prueba1 find($id, $columns = ['*'])
 * @method prueba1 first($columns = ['*'])
*/
class prueba1Repository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Nombre',
        'Cedula'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return prueba1::class;
    }
}
