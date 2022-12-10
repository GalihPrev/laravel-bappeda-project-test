<?php

namespace App\Http\Controllers;

use App\Models\dataKategori;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoredataKategoriRequest;
use App\Http\Requests\UpdatedataKategoriRequest;

class DataKategoriController extends Controller
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
     * @param  \App\Http\Requests\StoredataKategoriRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoredataKategoriRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\dataKategori  $dataKategori
     * @return \Illuminate\Http\Response
     */
    public function show(dataKategori $dataKategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dataKategori  $dataKategori
     * @return \Illuminate\Http\Response
     */
    public function edit(dataKategori $dataKategori)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatedataKategoriRequest  $request
     * @param  \App\Models\dataKategori  $dataKategori
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatedataKategoriRequest $request, dataKategori $dataKategori)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dataKategori  $dataKategori
     * @return \Illuminate\Http\Response
     */
    public function destroy(dataKategori $dataKategori)
    {
        //
    }
}
