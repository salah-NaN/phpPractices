<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePetRequest;
use App\Http\Requests\UpdatePetRequest;
use Illuminate\Http\Request;
use App\Models\Pet;
use Exception;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Pet::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePetRequest $request)
    {
        $pet = Pet::create([
            'person_id' => $request->person_id,
            'name' => $request->name,
            'type' => $request->type,
            'age' => $request->age,
        ]);

        return $pet;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $pet)
    {
        return Pet::find($pet);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePetRequest $request, string $pet)
    {
        $petObject = Pet::find($pet);

        $petObject->update([
            'person_id' => $request->person_id,
            'name' => $request->name,
            'type' => $request->type,
            'age' => $request->age,
        ]);

        return $petObject;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $pet)
    {
        $petObject = Pet::find($pet);

        $petObject->delete();

        return $petObject;
    }
}
