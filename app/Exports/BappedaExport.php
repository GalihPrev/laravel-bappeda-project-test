<?php

namespace App\Exports;

use App\Models\dataBappeda;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class BappedaExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        // print with filter by kelurahan name 
        // join 2 table dataBappeda dan kelurahan
        return DB::table('data_bappedas')
            ->join('kelurahans', 'data_bappedas.kelurahan_id', '=', 'kelurahans.id')
            ->orderBy('kelurahans.name', 'ASC')
            ->select(
                'data_bappedas.created_at as Tanggal Dibuat',
                'data_bappedas.updated_at as Tanggal Diubah',
                'kelurahans.name as Nama Kelurahan',
                'data_bappedas.permasalahan as Permasalahan',
                'data_bappedas.penyebab as Penyebab',
                'data_bappedas.lokasi as Lokasi',
                'data_bappedas.usulan as Usulan',
                'data_bappedas.keterangan as Keterangan',

            )
            ->get();
    }

    public function headings(): array
    {
        return [
            'Tanggal Dibuat',
            'Tanggal Diubah',
            'Nama Kelurahan',
            'Permasalahan',
            'Penyebab',
            'Lokasi',
            'Usulan',
            'Keterangan',

        ];
    }
}
