<?php

namespace App\Exports;

use App\Models\Employee;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class EmployeeExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return Employee::all();

        return Employee::select('fullname', 'email', 'phone', 'place', 'dob', 'gender', 'martial', 
        'religion', 'address', 'rt', 'rw', 'kelurahan', 'kecamatan', 'kabupaten', 'kontak_keluarga', 'hubungan_keluarga', 'ktp', 'kk', 'npwp', 'noBpjs', 'noBpjsTk')
        ->get();
    }

    public function headings(): array{
        return [
            'Nama',
            'Alamat Email',
            'No. Telp',
            'Tempat Lahir', 
            'Tanggal Lahir',
            'Jenis Kelamin',
            'Status',
            'Agama',
            'Alamat',
            'RT',
            'RW',
            'Kelurahan',
            'Kecamatan',
            'Kabupaten',
            'No. Keluarga',
            'Hubungan Keluarga',
            'No. KTP',
            'No. KK',
            'NPWP',
            'No. BPJS',
            'No. BPJS TK',
        ];
    }
}
