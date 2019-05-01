<?php

namespace App\Http\Controllers;

use App\Supplying;
use Illuminate\Http\Request;
use App\Http\Requests\SupplyingRequest;

class SupplyingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addToSupplying(SupplyingRequest $request, Supplying $supplying)
    {
        $supplying->user_id = $request->supplier_id;
        $supplying->product_id = $request->product_id;
        $supplying->quantity = $request->quantity;
        if ($supplying->save()) {
            return back();
        } else {
            return back()->withErrors('errors');
        }
    }

    public function deleteFromSupplying(Request $request)
    {
        $supplying = Supplying::find($request->id);
        if ($supplying->delete()) {
            return back();
        } else {
            return back()->withErrors('errors');
        }
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\supplying  $supplying
     * @return \Illuminate\Http\Response
     */
    public function show(supplying $supplying)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\supplying  $supplying
     * @return \Illuminate\Http\Response
     */
    public function edit(supplying $supplying)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\supplying  $supplying
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, supplying $supplying)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\supplying  $supplying
     * @return \Illuminate\Http\Response
     */
    public function destroy(supplying $supplying)
    {
        //
    }
}
