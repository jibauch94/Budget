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
        return Investments::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInvestmentsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInvestmentsRequest $request)
    {
        $request->validate([
            'user_id' => 'required',
            'description' => 'required',
            'amount' => 'required',
            'valid_from' => 'required',
            'valid_to' => 'required',
          ]);

        $newInvestment = Investments::create([
            'user_id' => $request->get('user_id'),
            'description' => $request->get('description'),
            'amount' => $request->get('amount'),
            'valid_from' => $request->get('valid_from'),
            'valid_to' => $request->get('valid_to'),
        ]);

        return $newInvestment;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Investments  $investments
     * @return \Illuminate\Http\Response
     */
    public function show(Investments $investments)
    {
        return $investments;
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
        $request->validate([
            'user_id' => 'required',
            'description' => 'required',
            'amount' => 'required',
            'valid_from' => 'required',
            'valid_to' => 'required',
          ]);

            $investments->user_id = $request->get('user_id');
            $investments->description = $request->get('description');
            $investments->amount = $request->get('amount');
            $investments->valid_from = $request->get('valid_from');
            $investments->valid_to = $request->get('valid_to');

        $investments->save();

        return $investments;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Investments  $investments
     * @return \Illuminate\Http\Response
     */
    public function destroy(Investments $investments)
    {
        return $investments->delete();
    }
}
