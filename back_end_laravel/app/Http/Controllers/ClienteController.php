<?php

namespace App\Http\Controllers;

use App\DTOs\ApiResponseDTO;
use App\Http\Requests\StoreClienteRequest;
use App\Http\Requests\UpdateClienteRequest;
use App\Http\Resources\ClienteResource;
use App\Interfaces\ClienteServiceInterface;
use App\Models\Cliente;
use GuzzleHttp\Client;

class ClienteController extends Controller
{

    protected $clienteSerivice;

    public function __construct(ClienteServiceInterface $clienteSerivice)
    {
        $this->clienteSerivice = $clienteSerivice;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ApiResponseDTO::success(data: ClienteResource::collection($this->clienteSerivice->all()))->toJson();
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClienteRequest $request)
    {
        $cliente = $this->clienteSerivice->create($request->only([
            'nome',
            'cpf',
            'dt_nascimento',
            'estado_id',
            'cidade_id',
            'sexo',
        ]));
        return ApiResponseDTO::success(201, data: new ClienteResource($cliente))->toJson();
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        return ApiResponseDTO::success(201, data: new ClienteResource($cliente))->toJson();
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClienteRequest $request, Cliente $cliente)
    {
        $cliente = $this->clienteSerivice->update($cliente->id, $request->only([
            'nome',
            'cpf',
            'dt_nascimento',
            'estado_id',
            'cidade_id',
            'sexo',
        ]));
        return ApiResponseDTO::success(201, data: new ClienteResource($cliente))->toJson();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        $this->clienteSerivice->delete($cliente->id);
        return ApiResponseDTO::success()->toJson();
    }
}
