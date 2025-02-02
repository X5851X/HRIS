<?php

namespace App\Imports;

use App\Models\Employee;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;

// Opsional: Pastikan formatter menggunakan 'slug'
HeadingRowFormatter::default('slug');

class EmployeesImport implements ToModel, WithHeadingRow
{
    /**
     * Map setiap baris dari file Excel ke model Employee.
     *
     * Dengan WithHeadingRow, header Excel seperti:
     *   "Nomor Induk Pegawai" 
     * akan diubah menjadi "nomor_induk_pegawai".
     *
     * @param array $row
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Employee([
            'nama'                => $row['nama'] ?? null,
            'jabatan'             => $row['jabatan'] ?? null,
            'nomor_induk_pegawai' => $row['nomor_induk_pegawai'] ?? null,
            'keterangan'          => $row['keterangan'] ?? null,
            'bidang'              => $row['bidang'] ?? null,
        ]);
    }
}
