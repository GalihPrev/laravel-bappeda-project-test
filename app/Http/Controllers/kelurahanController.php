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
use Illuminate\Support\Facades\Hash;
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

    public function profile()
    {
        $user = User::find(Auth::user()->id);
        return view('/kelurahan/profile-k', ['user' => $user]);
    }
    public function updateAkun(Request $request, $id)
    {

        $request->validate([
            'username' => 'required|string|max:255',
            'current_password' => 'nullable|required_with:new_password',
            'new_password' => 'nullable|min:8|max:20|required_with:current_password',
            'role_id' => 'required',
            'kelurahan_id' => 'required',
        ]);

        $user = User::findOrFail($id);
        $user->username = $request->input('username');
        $user->role_id = $request->input('role_id');
        $user->kelurahan_id = $request->input('kelurahan_id');


        if (!is_null($request->input('current_password'))) {
            if (Hash::check($request->input('current_password'), $user->password)) {
                $user->password = $request->input('new_password');
            } else {

                return redirect()->back()->withInput()->with('warning', 'Password Salah');
            }
        }

        $user->save();
        return redirect('/kelurahan/dashboard-k')->with('success', 'Data Berhasil Diedit');
    }



    // function to export excel
    public function exportExcel()
    {
        // export file from fromaspirasi with paginate 5
        // $formAspirasi = formAspirasi::where('kelurahan_id', Auth::user()->kelurahan->id)->paginate(5);
        return Excel::download(new KelurahanExport, 'kelurahan.xlsx');
    }
}
