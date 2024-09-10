<?php

namespace App\Http\Controllers;

use App\DTOs\ApiResponseDTO;
use App\Http\Requests\StoreTipoAnimalRequest;
use App\Http\Requests\UpdateTipoAnimalRequest;
use App\Http\Resources\TipoAnimalResource;
use App\Interfaces\TipoAnimalServiceInterface;
use App\Models\TipoAnimal;

class TipoAnimalController extends Controller
{

    protected $tipoAnimal;

    public function __construct(TipoAnimalServiceInterface $tipoAnimal)
    {

        $this->tipoAnimal = $tipoAnimal;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ApiResponseDTO::success(data: TipoAnimalResource::collection($this->tipoAnimal->all()))->toJson();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTipoAnimalRequest $request)
    {
        $tipoAnimal = $this->tipoAnimal->create($request->only(["name"]));
        return ApiResponseDTO::success(201, data: new TipoAnimalResource($tipoAnimal))->toJson();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $tipoAnimal = $this->tipoAnimal->find($id);
        return ApiResponseDTO::success(data: new TipoAnimalResource($tipoAnimal))->toJson();
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTipoAnimalRequest $request, int $tipoAnimal)
    {
        $tipoAnimal = $this->tipoAnimal->update($tipoAnimal, $request->only(["name"]));
        return ApiResponseDTO::success(201, data: new TipoAnimalResource($tipoAnimal))->toJson();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $this->tipoAnimal->delete($id);
        return ApiResponseDTO::success()->toJson();
    }
}
