<?php

namespace App\Repositories;

use App\Interfaces\AnimalRepositoryInterface;
use App\Models\Animal;

class AnimalRepository extends BaseRepository implements AnimalRepositoryInterface
{
    public function __construct(Animal $animal)
    {
        parent::__construct($animal);
    }

    public function find($id)
    {
        return $this->model->with("tipoAnimal")->find($id);
    }

    public function all()
    {
        return $this->model->with("tipoAnimal")->get();
    }

    public function allAnimalsUser($id)
    {
        return $this->model->where("user_id", $id)->get();
    }
}
