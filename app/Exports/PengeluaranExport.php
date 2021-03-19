<?php

namespace App\Exports;

use App\Pengeluaran;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PengeluaranExport implements FromCollection, WithHeadings
{
    public function headings(): array
    {
        return [
            'Nomor Nota',
            'Jumlah Pengeluaran',
            'Tanggal Pengeluaran',
            'Keperluan',
            'Periode',
        ];
    }
    public function collection()
    {
        return Pengeluaran::select('nomor_nota','jumlah_pengeluaran','tanggal_pengeluaran','keperluan','periode')->get();
        
    }
}
