<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\kelurahan;
use App\Models\dataKategori;
use App\Models\formAspirasi;

use Illuminate\Http\Request;
use App\Models\dataKategorie;
use App\Exports\KelurahanExport;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;



class KelurahanController extends Controller
{

    public function index()
    {

        // return view('kelurahan.dashboard-k');
    }

    public function create()
    {
        $formAspirasi = formAspirasi::where('kelurahan_id', Auth::user()->kelurahan->id)->paginate(20);
        return view('kelurahan.dashboard-k', ['formAspirasi' => $formAspirasi]);
    }


    public function store(Request $request)
    {

        $dataKategorie = dataKategorie::create($request)->all();
        return redirect('/kelurahan/riwayat-k')->with('success', 'Data Berhasil Divalidasi');
    }

    public function show(Request $request)
    {

        $formAspirasi = formAspirasi::where('kelurahan_id', Auth::user()->kelurahan->id)->get();
        $user = User::select('id', 'username')->get();
        $kelurahan = kelurahan::select('id', 'name')->get();
        // dd($formAspirasi);
        return view('kelurahan/riwayat-k', ['formAspirasi' => $formAspirasi, 'user' => $user, 'kelurahan' => $kelurahan]);
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }



    // function to export excel
    public function exportExcel()
    {
        // export file from fromaspirasi with paginate 5
        // $formAspirasi = formAspirasi::where('kelurahan_id', Auth::user()->kelurahan->id)->paginate(5);
        return Excel::download(new KelurahanExport, 'kelurahan.xlsx');
    }
}
