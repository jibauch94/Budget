<?php

namespace App\Http\Controllers;

use App\Models\BudgetType;
use App\Http\Requests\StoreBudgetTypeRequest;
use App\Http\Requests\UpdateBudgetTypeRequest;

class BudgetTypeController extends Controller
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
     * @param  \App\Http\Requests\StoreBudgetTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBudgetTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BudgetType  $budgetType
     * @return \Illuminate\Http\Response
     */
    public function show(BudgetType $budgetType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BudgetType  $budgetType
     * @return \Illuminate\Http\Response
     */
    public function edit(BudgetType $budgetType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBudgetTypeRequest  $request
     * @param  \App\Models\BudgetType  $budgetType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBudgetTypeRequest $request, BudgetType $budgetType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BudgetType  $budgetType
     * @return \Illuminate\Http\Response
     */
    public function destroy(BudgetType $budgetType)
    {
        //
    }
}
