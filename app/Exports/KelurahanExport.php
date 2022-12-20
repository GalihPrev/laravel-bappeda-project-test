<?php

namespace App\Exports;

use App\Models\dataBappeda;
use App\Models\formAspirasi;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class KelurahanExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {

        return dataBappeda::select(
            'created_at as Dubuat',
            'updated_at as Diubah',
            'permasalahan as Pemasalahan',
            'penyebab as Penyebab',
            'lokasi as Lokasi',
            'usulan as Usulan',
            'keterangan as Keterangan',

        )
            ->where('kelurahan_id', Auth::user()
                ->kelurahan->id)->get();
        // paginate()->all()
    }
    public function headings(): array
    {
        return [
            'Dibuat',
            'Diubah',
            'Pemasalahan',
            'Penyebab',
            'Lokasi',
            'Usulan',
            'Keterangan',

        ];
    }
}
