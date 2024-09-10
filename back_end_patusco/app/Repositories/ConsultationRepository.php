<?php

namespace App\Repositories;

use App\Interfaces\ConsultationRepositoryInterface;
use App\Models\Consultation;

class ConsultationRepository extends BaseRepository implements ConsultationRepositoryInterface
{

    public function __construct(Consultation $consultation)
    {
        parent::__construct($consultation);
    }


    public function find($id)
    {
        return $this->model->with(["animal", "user"])->find($id);
    }

    public function all()
    {
        return $this->model->with(["animal.tipoAnimal", "user"])->get();
    }
}
