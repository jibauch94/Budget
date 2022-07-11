<?php

namespace App\Http\Controllers;

use App\Models\Savings;
use App\Http\Requests\StoreSavingsRequest;
use App\Http\Requests\UpdateSavingsRequest;

class SavingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Savings::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSavingsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSavingsRequest $request)
    {
        $request->validate([
            'user_id' => 'required',
            'description' => 'required',
            'amount' => 'required',
            'valid_from' => 'required',
            'valid_to' => 'required',
          ]);

        $newSaving = Savings::create([
            'user_id' => $request->get('user_id'),
            'description' => $request->get('description'),
            'amount' => $request->get('amount'),
            'valid_from' => $request->get('valid_from'),
            'valid_to' => $request->get('valid_to'),
        ]);

        return $newSaving;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Savings  $savings
     * @return \Illuminate\Http\Response
     */
    public function show(Savings $savings)
    {
        return $savings;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSavingsRequest  $request
     * @param  \App\Models\Savings  $savings
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSavingsRequest $request, Savings $savings)
    {
        $request->validate([
            'user_id' => 'required',
            'description' => 'required',
            'amount' => 'required',
            'valid_from' => 'required',
            'valid_to' => 'required',
          ]);

            $savings->user_id = $request->get('user_id');
            $savings->description = $request->get('description');
            $savings->amount = $request->get('amount');
            $savings->valid_from = $request->get('valid_from');
            $savings->valid_to = $request->get('valid_to');

        $savings->save();

        return $savings;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Savings  $savings
     * @return \Illuminate\Http\Response
     */
    public function destroy(Savings $savings)
    {
        return $savings->delete();
    }
}
