<?php

namespace App\Http\Controllers;

use App\Models\Investments;
use App\Http\Requests\StoreInvestmentsRequest;
use App\Http\Requests\UpdateInvestmentsRequest;

class InvestmentsController extends Controller
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
     * @param  \App\Http\Requests\StoreInvestmentsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInvestmentsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Investments  $investments
     * @return \Illuminate\Http\Response
     */
    public function show(Investments $investments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Investments  $investments
     * @return \Illuminate\Http\Response
     */
    public function edit(Investments $investments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInvestmentsRequest  $request
     * @param  \App\Models\Investments  $investments
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInvestmentsRequest $request, Investments $investments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Investments  $investments
     * @return \Illuminate\Http\Response
     */
    public function destroy(Investments $investments)
    {
        //
    }
}
