<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attendance;

class ReportController extends Controller
{
    /**
     * Menampilkan laporan kehadiran.
     */
    public function index()
    {
        $attendanceData = Attendance::select('status')
            ->selectRaw('COUNT(*) as total')
            ->groupBy('status')
            ->get();

        return view('admin.reports', compact('attendanceData'));
    }
}
