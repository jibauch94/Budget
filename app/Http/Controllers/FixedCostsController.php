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
        return FixedCosts::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFixedCostsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFixedCostsRequest $request)
    {
        $request->validate([
            'user_id' => 'required',
            'description' => 'required',
            'amount' => 'required',
            'valid_from' => 'required',
            'valid_to' => 'required',
        ]);

        $newFixedCost = FixedCosts::create([
            'user_id' => $request->get('user_id'),
            'description' => $request->get('description'),
            'amount' => $request->get('amount'),
            'valid_from' => $request->get('valid_from'),
            'valid_to' => $request->get('valid_to'),
        ]);

        return $newFixedCost;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FixedCosts  $fixedCosts
     * @return \Illuminate\Http\Response
     */
    public function show(FixedCosts $fixedCosts)
    {
        return $fixedCosts;
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
        $request->validate([
            'user_id' => 'required',
            'description' => 'required',
            'amount' => 'required',
            'valid_from' => 'required',
            'valid_to' => 'required',
          ]);

            $fixedCosts->user_id = $request->get('user_id');
            $fixedCosts->description = $request->get('description');
            $fixedCosts->amount = $request->get('amount');
            $fixedCosts->valid_from = $request->get('valid_from');
            $fixedCosts->valid_to = $request->get('valid_to');

        $fixedCosts->save();

        return $fixedCosts;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FixedCosts  $fixedCosts
     * @return \Illuminate\Http\Response
     */
    public function destroy(FixedCosts $fixedCosts)
    {
        return $fixedCosts->delete();
    }
}
