<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHeroDataRequest;
use App\Http\Requests\UpdateHeroDataRequest;
use App\Models\HeroData;

class HeroDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHeroDataRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(HeroData $heroData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HeroData $heroData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHeroDataRequest $request, HeroData $heroData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HeroData $heroData)
    {
        //
    }
}
