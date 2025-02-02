<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Human Resource Information System - Pemkot Bekasi">
    <title>@yield('title') - Admin Panel</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .navbar {
            background-color: #add8e6; /* Baby blue */
            color: white;
            z-index: 1000;
        }
        .sidebar {
            height: 100vh;
            background: #add8e6; /* Baby blue */
            color: #fff;
            position: fixed;
            top: 0;
            left: -250px; /* Hidden by default */
            width: 250px;
            overflow-y: auto;
            transition: all 0.3s ease;
            z-index: 999;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            border-right: 1px solid #d4d4d4;
            padding-top: 70px; /* Offset for navbar */
        }
        .sidebar a {
            color: #ffffff;
            text-decoration: none;
            padding: 12px 20px;
            display: flex;
            align-items: center;
            gap: 10px;
            border-radius: 4px;
            margin: 8px 10px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        .sidebar a:hover {
            background: #87ceeb; /* Lighter blue */
            color: #fff;
            box-shadow: inset 3px 0 0 #4682b4;
        }
        .sidebar .active {
            background: #4682b4; /* Steel blue */
            color: #fff;
        }
        .sidebar-toggler {
            background: transparent;
            border: none;
            color: #fff;
            font-size: 24px;
            cursor: pointer;
            margin-left: 10px;
        }
        .main-content {
            margin-left: 0;
            padding: 20px;
            transition: margin-left 0.3s ease;
            flex: 1;
        }
        .sidebar-open .sidebar {
            left: 0;
        }
        .sidebar-open .main-content {
            margin-left: 250px;
        }
        footer {
            background-color: #4682b4; /* Steel blue */
            color: white;
            text-align: center;
            padding: 15px 0;
            margin-top: auto; /* Ensures footer sticks to bottom */
            position: relative;
            z-index: 1;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg shadow-lg fixed-top">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <button class="sidebar-toggler">
                    <i class="fas fa-bars"></i>
                </button>
                <img src="/images/logo-bekasi.png" alt="Logo Pemerintah Kota Bekasi" class="ms-3" style="height: 50px;">
                <img src="/images/logo-diskominfostandi.png" alt="Logo Diskominfostandi Bekasi" class="ms-2" style="height: 50px;">
            </div>
            <div class="d-flex align-items-center">
                <span class="text-white me-3">Welcome, Admin</span>
                <form action="{{ route('logout') }}" method="POST" class="mb-0">
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Sidebar -->
    <nav class="sidebar">
        <a href="{{ route('admin.dashboard') }}" class="@if(Request::is('admin/dashboard')) active @endif">
            <i class="fas fa-tachometer-alt"></i> Dashboard
        </a>
        <a href="{{ route('admin.employee') }}" class="@if(Request::is('admin/employee*')) active @endif">
            <i class="fas fa-users"></i> Employees
        </a>
        <a href="{{ route('admin.attendance') }}" class="@if(Request::is('admin/attendance*')) active @endif">
            <i class="fas fa-calendar-check"></i> Attendance
        </a>
        <a href="{{ route('admin.report') }}" class="@if(Request::is('admin/report*')) active @endif">
            <i class="fas fa-file-alt"></i> Reports
        </a>
        <a href="{{ route('admin.upload') }}" class="@if(Request::is('admin/upload*')) active @endif">
            <i class="fas fa-upload"></i> Upload
        </a>
    </nav>

    <!-- Main Content -->
    <div class="main-content">
        <div class="container mt-5 pt-4">
            @yield('content')
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p class="mb-0"><small>&copy; 2025 HRIS Diskominfostandi Bekasi. All rights reserved.</small></p>
            <small>Created for thesis purposes</small>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Sidebar Toggle Script -->
    <script>
        const sidebarToggler = document.querySelector('.sidebar-toggler');
        const body = document.body;

        sidebarToggler.addEventListener('click', () => {
            body.classList.toggle('sidebar-open');
        });
    </script>
</body>
</html>
