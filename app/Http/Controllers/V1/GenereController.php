<?php

namespace App\Http\Controllers\V1;

use App\Http\Requests\StoreGenereRequest;
use App\Http\Requests\UpdateGenereRequest;
use App\Models\Genere;
use App\Http\Controllers\Controller;

class GenereController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGenereRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Genere $genere)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGenereRequest $request, Genere $genere)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Genere $genere)
    {
        //
    }
}
