<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\kelurahan;
use App\Models\dataBappeda;
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

        $formAspirasi = formAspirasi::where('kelurahan_id', Auth::user()->kelurahan->id,)->where('visible', 1)->paginate(20);
        return view('kelurahan.dashboard-k', ['formAspirasi' => $formAspirasi]);
    }

    public function create($id)
    {
        $formAspirasi = formAspirasi::findOrFail($id);
        return view('kelurahan.submit_data', ['formAspirasi' => $formAspirasi]);
    }


    public function store(Request $request)
    {


        $dataBappeda = dataBappeda::create($request->all());

        formAspirasi::where('id', $request->form_aspirasi_id)->update(['visible' => 0]);
        if ($dataBappeda) {
            return redirect('/kelurahan/riwayat-k')->with('success', 'Data Berhasil Disubmit');
        } else {
            return redirect('/kelurahan/riwayat-k')->with('error', 'Data Gagal Disubmit');
        }
    }

    public function show(Request $request)
    {
        $search = $request->search;
        if ($search == null) {
            redirect('/kelurahan/riwayat-k');
        }

        // get data from tabel data_bappeda
        $dataBappeda = dataBappeda::where('kelurahan_id', Auth::user()->kelurahan->id)
            ->where('permasalahan', 'like', "%" . $search . "%")
            ->Where('penyebab', 'like', "%" . $search . "%")
            ->Where('lokasi', 'like', "%" . $search . "%")
            ->paginate(20);
        return view('kelurahan.riwayat-k', ['dataBappeda' => $dataBappeda]);
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

        $formAspirasi = formAspirasi::findOrFail($id);
        $formAspirasi->delete();
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
