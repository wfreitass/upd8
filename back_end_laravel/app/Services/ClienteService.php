<?php

namespace App\Services;

use App\Interfaces\ClienteRepositoryInterface;
use App\Interfaces\ClienteServiceInterface;

class ClienteService extends  BaseService implements ClienteServiceInterface
{
    public function __construct(ClienteRepositoryInterface $cliente)
    {
        parent::__construct($cliente);
    }
}
