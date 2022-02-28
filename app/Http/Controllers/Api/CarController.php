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

    /**
     * Remove the specified resource from storage.
     *
     * @param Car $car
     * @return CarResource
     */
    public function destroy(Car $car): CarResource
    {
        $car->delete();
        return new CarResource($car);
    }

    /**
     * Get first car from table where type == 'big', name of the car should be in lowercase and uppercase
     *
     * @return CarResource
     */
    public function getWithFilter(): CarResource
    {
        $car = $this->getFirstBigCar();
        return new CarResource($car);
    }

    /**
     * Delete first car from table where type == 'big'
     *
     * @return CarResource
     */
    public function deleteWithFilter(): CarResource
    {
        $car = $this->getFirstBigCar();
        $car->delete();
        return new CarResource($car);
    }

    /**
     * Get first car from table where type == 'big'
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function getFirstBigCar(): \Illuminate\Database\Eloquent\Model
    {
        return Car::query()->where('type', 'big')->first();
    }
}
