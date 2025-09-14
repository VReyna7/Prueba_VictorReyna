<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Tarea;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\V1\TareaResource;
use App\Http\Requests\StoreTareaRequest;
use App\Http\Requests\UpdateTareaRequest;

class TareaController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return TareaResource::collection(Tarea::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTareaRequest $request)
    {
        //
        $data = $request->validated();

        $tarea = Tarea::create($data);

        return response()->json($tarea, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Tarea $tarea)
    {
        //
        return new TareaResource($tarea);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTareaRequest $request, Tarea $tarea)
    {
        $data = $request->validated();
        $tarea->update($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tarea $tarea)
    {
        $tarea->delete();

        return response()->json([
            ''
        ],204);
    }
}
