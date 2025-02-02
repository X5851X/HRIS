<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employee;

class AttendanceController extends Controller
{
    /**
     * Menampilkan halaman kehadiran berdasarkan data karyawan.
     */
    public function index()
    {
        $employees = Employee::all(); // Ambil semua data karyawan
        return view('admin.attendance', compact('employees'));
    }
}
