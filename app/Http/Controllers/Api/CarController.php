<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CarRequest;
use App\Http\Resources\CarResource;
use App\Models\Car;

class CarController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     */
    public function index(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        $cars = Car::all();
        return CarResource::collection($cars);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CarRequest $request
     * @return CarResource
     */
    public function store(CarRequest $request): CarResource
    {
        $credentials = $request->validated();
        $car = Car::query()->create($credentials);
        return new CarResource($car);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CarRequest $request
     * @param Car $car
     * @return CarResource
     */

    public function update(CarRequest $request, Car $car): CarResource
    {
        $credentials = $request->validated();
        $car->update($credentials);
        return new CarResource($car);
    }
}
