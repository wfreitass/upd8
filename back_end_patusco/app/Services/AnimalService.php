<?php

namespace App\Services;

use App\Interfaces\AnimalRepositoryInterface;
use App\Interfaces\AnimalServiceInterface;

class AnimalService extends BaseService implements AnimalServiceInterface
{
    public function __construct(AnimalRepositoryInterface $animal)
    {
        parent::__construct($animal);
    }

    public function allAnimalsUser($id)
    {
        return $this->repository->allAnimalsUser($id);
    }
}
