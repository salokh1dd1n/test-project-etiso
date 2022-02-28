<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CarResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $route = $request->route()->getName();

        $crud = array_fill_keys([
            'cars.index',
            'cars.update',
            'cars.store',
            'cars.destroy',
        ], [
            'id' => $this->id,
            'name' => $this->name,
            'type' => $this->type
        ]);
        $others = [
            'cars.getWithUpperCase' => [
                'id' => $this->id,
                'name' => strtoupper($this->name),
                'type' => $this->type
            ],
            'cars.getWithLowerCase' => [
                'id' => $this->id,
                'name' => strtolower($this->name),
                'type' => $this->type
            ],
        ];
        $resources = array_merge($crud, $others);

        return $resources[$route];
    }
}
