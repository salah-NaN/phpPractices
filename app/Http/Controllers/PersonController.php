<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePersonRequest;
use App\Http\Requests\UpdatePersonRequest;
use Illuminate\Http\Request;
use App\Models\Person;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Person::all();
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePersonRequest $request)
    {
        $person = Person::create([
            'name' => $request->name,
            'age' => $request->age,
        ]);

        return $person;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $person)
    {
        return Person::find($person);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePersonRequest $request, string $person)
    {
        $personObject = Person::find($person);
        $personObject->update([
            'name' => $request->name,
            'age' => $request->age,
        ]);

        return Person::find($personObject);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $person)
    {
        $personObject = Person::find($person);
        $personObject->delete();

        return response()->json([
            'message' => 'Person deleted',
            'data' => $personObject,
        ], 200);
    }
}
