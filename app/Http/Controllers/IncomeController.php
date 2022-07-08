<?php

namespace App\Http\Controllers;

use App\Models\Income;
use App\Http\Requests\StoreIncomeRequest;
use App\Http\Requests\UpdateIncomeRequest;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $incomes = Income::all();

        return $incomes;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreIncomeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIncomeRequest $request)
    {
        $request->validate([
            'user_id' => 'required',
            'description' => 'required',
            'amount' => 'required',
            'valid_from' => 'required',
            'valid_to' => 'required',
          ]);

        $newIncome = Income::create([
            'user_id' => $request->get('user_id'),
            'description' => $request->get('description'),
            'amount' => $request->get('amount'),
            'valid_from' => $request->get('valid_from'),
            'valid_to' => $request->get('valid_to'),
        ]);

        return $newIncome;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function show(Income $income)
    {
        return $income;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIncomeRequest  $request
     * @param  \App\Models\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIncomeRequest $request, Income $income)
    {
        $request->validate([
            'user_id' => 'required',
            'description' => 'required',
            'amount' => 'required',
            'valid_from' => 'required',
            'valid_to' => 'required',
          ]);

            $income->user_id = $request->get('user_id');
            $income->description = $request->get('description');
            $income->amount = $request->get('amount');
            $income->valid_from = $request->get('valid_from');
            $income->valid_to = $request->get('valid_to');

        $income->save();

        return $income;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function destroy(Income $income)
    {
        $income->delete();

        return $income::all();
    }
}
