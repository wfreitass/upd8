<?php

namespace App\Repositories;

use App\Interfaces\TipoAnimalRepositoryInterface;
use App\Models\Post;
use App\Models\TipoAnimal;

class TipoAnimalRepository extends BaseRepository implements TipoAnimalRepositoryInterface
{

    public function __construct(TipoAnimal $tipoAnimal)
    {
        parent::__construct($tipoAnimal);
    }
}
