<?php

namespace App\Http\Controllers;


use App\Models\dataKategorie;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoredataKategoriRequest;
use App\Http\Requests\UpdatedataKategoriRequest;

class DataKategorieController extends Controller
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
    public function show(dataKategorie $dataKategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dataKategori  $dataKategori
     * @return \Illuminate\Http\Response
     */
    public function edit(dataKategorie $dataKategori)
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
    public function update(UpdatedataKategoriRequest $request, dataKategorie $dataKategori)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dataKategori  $dataKategori
     * @return \Illuminate\Http\Response
     */
    public function destroy(dataKategorie $dataKategori)
    {
        //
    }
}
