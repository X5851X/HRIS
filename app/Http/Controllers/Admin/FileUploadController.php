<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\EmployeesImport;

class FileUploadController extends Controller
{
    /**
     * Menampilkan halaman upload file Excel.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('admin.upload'); // Pastikan file view ini ada di resources/views/admin/upload.blade.php
    }

    /**
     * Handle the uploaded Excel file and update the employees data.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls'
        ]);

        $file = $request->file('file');

        try {
            Excel::import(new EmployeesImport, $file);
            return back()->with('success', 'File Excel berhasil diupload dan data karyawan telah diperbarui.');
        } catch (\Exception $e) {
            return back()->withErrors(['file' => 'Terjadi kesalahan saat mengupload file: ' . $e->getMessage()]);
        }
    }
}
