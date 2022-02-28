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
}
