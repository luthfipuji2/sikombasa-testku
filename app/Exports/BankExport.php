<?php

namespace App\Exports;

use App\Models\Admin\Bank;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Symfony\Component\VarDumper\Cloner\Data;

class BankExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Bank::all();
    }

    public function headings(): array
    {
        return [
            '#',
            'NAMA BANK',
            'NAMA REKENING',
            'NOMOR REKENING'
        ];
    }

    public function map($bank): array
    {
        return [
            $bank->id_bank,
            $bank->nama_bank,
            $bank->nama_rekening,
            $bank->no_rekening
        ];
    }
}
