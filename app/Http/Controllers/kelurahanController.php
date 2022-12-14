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
        $dataKategorie = dataKategorie::create($request->all());
        // validation data if create data succes alert success 
        if ($dataKategorie) {
            return redirect('/kelurahan/riwayat-k')->with('success', 'Data Berhasil Disubmit');
        } else {
            return redirect('/kelurahan/riwayat-k')->with('error', 'Data Gagal Disubmit');
        }
    }

    public function show(Request $request)
    {
        dd($request->all());

        $dataKategorie = dataKategorie::where('aspirasi_id', Auth::user()->aspirasi->id)->get();

        return view('kelurahan/riwayat-k', ['dataKategorie' => $dataKategorie]);
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
        // dd($id);
        // dd($id);
        $formAspirasi = formAspirasi::findOrFail($id);
        $formAspirasi->delete();
        // dd("testis");
        return redirect('/kelurahan/dashboard-k')->with('success', 'Data Berhasil Dihapus');
    }



    // function to export excel
    public function exportExcel()
    {
        // export file from fromaspirasi with paginate 5
        // $formAspirasi = formAspirasi::where('kelurahan_id', Auth::user()->kelurahan->id)->paginate(5);
        return Excel::download(new KelurahanExport, 'kelurahan.xlsx');
    }
}
