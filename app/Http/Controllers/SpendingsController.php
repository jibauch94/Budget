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
        return Spendings::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSpendingsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSpendingsRequest $request)
    {
        $request->validate([
            'user_id' => 'required',
            'description' => 'required',
            'amount' => 'required',
            'valid_from' => 'required',
            'valid_to' => 'required',
          ]);

        $newSpending = Spendings::create([
            'user_id' => $request->get('user_id'),
            'description' => $request->get('description'),
            'amount' => $request->get('amount'),
            'valid_from' => $request->get('valid_from'),
            'valid_to' => $request->get('valid_to'),
        ]);

        return $newSpending;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Spendings  $spendings
     * @return \Illuminate\Http\Response
     */
    public function show(Spendings $spendings)
    {
        return $spendings;
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
        $request->validate([
            'user_id' => 'required',
            'description' => 'required',
            'amount' => 'required',
            'valid_from' => 'required',
            'valid_to' => 'required',
          ]);

            $spendings->user_id = $request->get('user_id');
            $spendings->description = $request->get('description');
            $spendings->amount = $request->get('amount');
            $spendings->valid_from = $request->get('valid_from');
            $spendings->valid_to = $request->get('valid_to');

        $spendings->save();

        return $spendings;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Spendings  $spendings
     * @return \Illuminate\Http\Response
     */
    public function destroy(Spendings $spendings)
    {
        return $spendings->delete();
    }
}
