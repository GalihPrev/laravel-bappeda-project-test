<?php

namespace App\Http\Controllers;

use App\Models\dataBappeda;
use App\Http\Requests\Storedata_bappedaRequest;
use App\Http\Requests\Updatedata_bappedaRequest;

class DataBappedaController extends Controller
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
     * @param  \App\Http\Requests\Storedata_bappedaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storedata_bappedaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\data_bappeda  $data_bappeda
     * @return \Illuminate\Http\Response
     */
    public function show(dataBappeda $data_bappeda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\data_bappeda  $data_bappeda
     * @return \Illuminate\Http\Response
     */
    public function edit(dataBappeda $data_bappeda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatedata_bappedaRequest  $request
     * @param  \App\Models\data_bappeda  $data_bappeda
     * @return \Illuminate\Http\Response
     */
    public function update(Updatedata_bappedaRequest $request, dataBappeda $data_bappeda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\data_bappeda  $data_bappeda
     * @return \Illuminate\Http\Response
     */
    public function destroy(dataBappeda $data_bappeda)
    {
        //
    }
}
