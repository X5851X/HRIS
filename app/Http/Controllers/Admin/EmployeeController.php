<?php

// Contoh Controller: app/Http/Controllers/Admin/EmployeeController.php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        // Mengambil semua data karyawan dari database
        $employees = Employee::all();
        
        // Mengirim data ke view
        return view('admin.employee', compact('employees'));
    }
}
