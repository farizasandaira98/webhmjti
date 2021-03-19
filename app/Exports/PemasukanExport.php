<?php

namespace App\Exports;

use App\Pemasukan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PemasukanExport implements FromCollection, WithHeadings
{
    public function headings(): array
    {
        return [
            'Nomor Nota',
            'Jumlah Pemasukan',
            'Tanggal Pemasukan',
            'Sumber Dana',
            'Periode',
        ];
    }
    public function collection()
    {
        return Pemasukan::select('nomor_nota','jumlah_pemasukan','tanggal_pemasukan','sumber_dana','periode')->get();
        
    }
}
