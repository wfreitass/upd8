<?php

namespace App\Http\Controllers;

use App\DTOs\ApiResponseDTO;
use App\Http\Requests\StoreAnimalRequest;
use App\Http\Requests\UpdateAnimalRequest;
use App\Http\Resources\AnimalResource;
use App\Interfaces\AnimalServiceInterface;
use App\Models\Animal;
use Illuminate\Support\Facades\Gate;

class AnimalController extends Controller
{

    protected $animalService;

    public function __construct(AnimalServiceInterface $animalService)
    {
        $this->animalService = $animalService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ApiResponseDTO::success(data: AnimalResource::collection($this->animalService->all()))->toJson();
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAnimalRequest $request)
    {
        $animal = $this->animalService->create($request->only([
            "name",
            "age",
            "type_animal_id"
        ]));

        return ApiResponseDTO::success(201, data: new AnimalResource($animal))->toJson();
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $animal = $this->animalService->find($id);
        Gate::authorize('view', $animal);
        return ApiResponseDTO::success(data: new AnimalResource($animal))->toJson();
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAnimalRequest $request, int $animal)
    {
        $animal = $this->animalService->update($animal, $request->only([
            "name",
            "age",
            "type_animal_id"
        ]));

        return ApiResponseDTO::success(201, data: new AnimalResource($animal))->toJson();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $this->animalService->delete($id);
        return ApiResponseDTO::success()->toJson();
    }

    public function allAnimalsUser(int $id)
    {
        return ApiResponseDTO::success(201, data: new AnimalResource($this->animalService->allAnimalsUser($id)))->toJson();
    }
}
