<?php

namespace App\Services;

use App\Interfaces\TipoAnimalRepositoryInterface;
use App\Interfaces\TipoAnimalServiceInterface;

class TipoAnimalService extends BaseService  implements TipoAnimalServiceInterface
{
    public function __construct(TipoAnimalRepositoryInterface $tipoAnimal)
    {
        parent::__construct($tipoAnimal);
    }
}
