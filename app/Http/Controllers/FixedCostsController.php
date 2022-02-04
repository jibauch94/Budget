<?php

namespace App\Http\Controllers;

use App\Models\FixedCosts;
use App\Http\Requests\StoreFixedCostsRequest;
use App\Http\Requests\UpdateFixedCostsRequest;

class FixedCostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFixedCostsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFixedCostsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FixedCosts  $fixedCosts
     * @return \Illuminate\Http\Response
     */
    public function show(FixedCosts $fixedCosts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FixedCosts  $fixedCosts
     * @return \Illuminate\Http\Response
     */
    public function edit(FixedCosts $fixedCosts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFixedCostsRequest  $request
     * @param  \App\Models\FixedCosts  $fixedCosts
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFixedCostsRequest $request, FixedCosts $fixedCosts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FixedCosts  $fixedCosts
     * @return \Illuminate\Http\Response
     */
    public function destroy(FixedCosts $fixedCosts)
    {
        //
    }
}
