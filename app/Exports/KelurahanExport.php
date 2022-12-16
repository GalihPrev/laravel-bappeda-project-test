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

        return dataBappeda::select('permasalahan', 'penyebab', 'lokasi', 'usulan', 'keterangan', 'created_at', 'updated_at')
            ->where('kelurahan_id', Auth::user()
                ->kelurahan->id)->get();
        // paginate()->all()
    }
    public function headings(): array
    {
        return [
            'Permasalahan',
            'Penyebab',
            'Lokasi',
            'usulan',
            'keterangan',
            'created_at',
            'updated_at'
        ];
    }
}
