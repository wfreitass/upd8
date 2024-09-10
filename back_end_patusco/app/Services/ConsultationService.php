<?php

namespace App\Services;

use App\Interfaces\ConsultationRepositoryInterface;
use App\Interfaces\ConsultationServiceInterface;

class ConsultationService extends BaseService implements ConsultationServiceInterface
{
    public function __construct(ConsultationRepositoryInterface $consultation)
    {
        parent::__construct($consultation);
    }
}
