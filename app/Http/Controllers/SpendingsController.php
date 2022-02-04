<?php

namespace App\Http\Controllers;

use App\Models\Spendings;
use App\Http\Requests\StoreSpendingsRequest;
use App\Http\Requests\UpdateSpendingsRequest;

class SpendingsController extends Controller
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
     * @param  \App\Http\Requests\StoreSpendingsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSpendingsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Spendings  $spendings
     * @return \Illuminate\Http\Response
     */
    public function show(Spendings $spendings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Spendings  $spendings
     * @return \Illuminate\Http\Response
     */
    public function edit(Spendings $spendings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSpendingsRequest  $request
     * @param  \App\Models\Spendings  $spendings
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSpendingsRequest $request, Spendings $spendings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Spendings  $spendings
     * @return \Illuminate\Http\Response
     */
    public function destroy(Spendings $spendings)
    {
        //
    }
}
