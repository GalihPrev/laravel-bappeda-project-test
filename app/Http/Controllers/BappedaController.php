<?php

namespace App\Http\Controllers;

use App\Models\role;
use App\Models\User;
use App\Models\kelurahan;
use App\Models\dataBappeda;
use Termwind\Components\Dd;
use Illuminate\Http\Request;
use App\Exports\BappedaExport;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx\Rels;

class BappedaController extends Controller
{


    public function index()
    {
        $countDataKelurahan = dataBappeda::select('kelurahan_id')->distinct()->count('kelurahan_id');

        $countDataUsulan = dataBappeda::count();
        return view('bappeda.dashboard-b', ['countDataUsulan' => $countDataUsulan, 'countDataKelurahan' => $countDataKelurahan]);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function showBkel(Request $request)
    {
        if ($request->filter_id) {
            // dd(true);
            // dd($request->all());
            $dataBappeda = DB::table('data_bappedas')
                ->join('kelurahans', 'data_bappedas.kelurahan_id', '=', 'kelurahans.id')
                ->where('kelurahans.id', $request->filter_id)
                ->orderBy('kelurahans.name', 'ASC')
                ->select('data_bappedas.*', 'kelurahans.name as nama_kelurahan')
                ->get();

            $dataKelurahan = kelurahan::select('id', 'name')->get();
            return view('bappeda.table-bkel', ['dataBappeda' => $dataBappeda, 'dataKelurahan' => $dataKelurahan]);
        } else {
            $dataKelurahan = kelurahan::select('id', 'name')->get();
            $dataBappeda = DB::table('data_bappedas')
                ->join('kelurahans', 'data_bappedas.kelurahan_id', '=', 'kelurahans.id')
                ->orderBy('kelurahans.name', 'ASC')
                ->select('data_bappedas.*', 'kelurahans.name as nama_kelurahan')
                ->get();
            // dd(false);
            return view('bappeda.table-bkel', ['dataBappeda' => $dataBappeda, 'dataKelurahan' => $dataKelurahan]);
        }
        // dd($request->all());
        // // dd($dataKelurahan);


    }

    public function showBkat()
    {
        return view('bappeda.table-bkat');
    }

    public function editAkun(Request $request, $id)
    {

        $user = User::find($id);
        $kelurahan = kelurahan::select('id', 'name')->get();
        // dd($user);
        return view('bappeda.edit-akun', ['user' => $user, 'kelurahan' => $kelurahan]);
    }

    public function updateAkun(Request $request, $id)
    {
        // dd($request->all());
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
        // dd($user);

        if (!is_null($request->input('current_password'))) {
            if (Hash::check($request->input('current_password'), $user->password)) {
                $user->password = $request->input('new_password');
            } else {
                // dd('password salah');
                return redirect()->back()->withInput()->with('warning', 'Password Salah');
            }
        }

        $user->save();
        return redirect('/bappeda/list-akun')->with('success', 'Data Berhasil Diedit');
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function showAkun()
    {
        // join table roles,kelurahans,users  to order by role name 
        $user = DB::table('users')
            ->join('roles', 'users.role_id', '=', 'roles.id')
            ->join('kelurahans', 'users.kelurahan_id', '=', 'kelurahans.id')
            ->orderBy('roles.name', 'DESC')
            ->select('users.*', 'roles.name as nama_role', 'kelurahans.name as nama_kelurahan')
            ->get();


        return view('bappeda.list-akun', ['user' => $user]);
    }
    public function addAkun()
    {
        $role = role::select('id', 'name')->get();
        $kelurahan = kelurahan::select('id', 'name')->get();
        return view('bappeda.add-akun', ['role' => $role, 'kelurahan' => $kelurahan]);
    }
    public function storeAkun(Request $request)
    {


        $User = User::create($request->all());

        if ($User) {
            return redirect('/bappeda/list-akun')->with('success', 'Account Berhasil Ditambahkan');
        } else {
            return redirect('/bappeda/list-akun')->with('error', 'Account Gagal Ditambahkan');
        }
    }

    public function exportExcel()
    {
        // $formAspirasi = formAspirasi::where('kelurahan_id', Auth::user()->kelurahan->id)->paginate(5);
        return Excel::download(new BappedaExport, 'kelurahan.xlsx');
    }


    public function filter(Request $request)
    {

        // dd($request->all());
        $dataBappeda = DB::table('data_bappedas')
            ->join('kelurahans', 'data_bappedas.kelurahan_id', '=', 'kelurahans.id')
            ->where('kelurahans.id', $request->kelurahan_id)
            ->orderBy('kelurahans.name', 'ASC')
            ->select('data_bappedas.*', 'kelurahans.name as nama_kelurahan')
            ->get();

        $dataKelurahan = kelurahan::select('id', 'name')->get();
        return view('bappeda.table-bkel', ['dataBappeda' => $dataBappeda, 'dataKelurahan' => $dataKelurahan]);
    }
}
