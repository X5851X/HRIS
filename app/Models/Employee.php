<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';

    // Gunakan koneksi database hris_db
    protected $connection = 'hris_db';

    // Pastikan field fillable sesuai dengan nama kolom di tabel
    protected $fillable = [
        'nama',
        'jabatan',
        'nomor_induk_pegawai',
        'keterangan',
        'bidang',
    ];
}
