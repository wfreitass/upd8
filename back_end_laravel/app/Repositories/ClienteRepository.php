<?php

namespace App\Repositories;

use App\Interfaces\ClienteRepositoryInterface;
use App\Models\Cliente;

class ClienteRepository extends BaseRepository implements ClienteRepositoryInterface
{
    public function __construct(Cliente $cliente)
    {
        parent::__construct($cliente);
    }
}
