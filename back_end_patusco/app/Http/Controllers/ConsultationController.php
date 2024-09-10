<?php

namespace App\Http\Controllers;

use App\DTOs\ApiResponseDTO;
use App\Http\Requests\StoreConsultationRequest;
use App\Http\Requests\UpdateConsultationRequest;
use App\Http\Resources\ConsultationResource;
use App\Interfaces\ConsultationServiceInterface;
use App\Models\Consultation;

class ConsultationController extends Controller
{

    protected $consultationService;

    public function __construct(ConsultationServiceInterface $consultationService)
    {
        $this->consultationService = $consultationService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ApiResponseDTO::success(data: ConsultationResource::collection($this->consultationService->all()))->toJson();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreConsultationRequest $request)
    {
        $consultation = $this->consultationService->create($request->only([
            'animal_id',
            'symptoms',
            'dt_consultation',
            'turno',
        ]));

        return ApiResponseDTO::success(201, data: new ConsultationResource($consultation))->toJson();
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $consultation = $this->consultationService->find($id);
        return ApiResponseDTO::success(data: new ConsultationResource($consultation))->toJson();
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateConsultationRequest $request, int $consultation)
    {
        $consultation = $this->consultationService->update($consultation, $request->only([
            'animal_id',
            'symptoms',
            'dt_consultation',
            'turno',
        ]));
        return ApiResponseDTO::success(201, data: new ConsultationResource($consultation))->toJson();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $this->consultationService->delete($id);
        return ApiResponseDTO::success()->toJson();
    }
}
