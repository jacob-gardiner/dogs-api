<?php

namespace App\Http\Controllers;

use App\Http\Requests\Dogs\StoreDogRequest;
use App\Http\Requests\Dogs\UpdateDogRequest;
use App\Models\Dog;

class DogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Dog::orderByDesc('id')->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDogRequest $request)
    {
        return response()->json(Dog::create($request->validated()));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Dog $dog)
    {
        return response()->json($dog);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDogRequest $request, Dog $dog)
    {
        $dog->update($request->validated());

        return response()->json($dog->refresh());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dog $dog)
    {
        $dog->delete();

        return response()->noContent();
    }
}
