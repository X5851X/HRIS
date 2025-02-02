@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="container py-4">
    <h3 class="mb-4">Dashboard</h3>
    
    <!-- Google Calendar Embed -->
    <div class="card shadow-sm p-3 mb-4">
        <h5 class="card-title">Google Calendar</h5>
        <iframe src="https://calendar.google.com/calendar/embed?src=your_calendar_id&ctz=Asia/Jakarta" 
                style="border: 0" width="100%" height="600" frameborder="0" scrolling="no"></iframe>
    </div>

    <!-- Statistics Overview -->
    <div class="row mb-4">
        <div class="col-md-4">
            <div class="card shadow-sm text-center p-4 bg-primary text-white">
                <h5>Total Meetings</h5>
                <h2>15</h2>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm text-center p-4 bg-success text-white">
                <h5>Tasks Completed</h5>
                <h2>24</h2>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm text-center p-4 bg-danger text-white">
                <h5>Pending Approvals</h5>
                <h2>3</h2>
            </div>
        </div>
    </div>
    
    <!-- Recent Activity -->
    <div class="card shadow-sm p-3">
        <h5 class="card-title">Recent Activity</h5>
        <ul class="list-group">
            <li class="list-group-item">📌 Meeting with client scheduled for 10 AM</li>
            <li class="list-group-item">✅ Task "Prepare Financial Report" marked as complete</li>
            <li class="list-group-item">🔔 Reminder: Submit monthly performance review</li>
        </ul>
    </div>
</div>

@endsection
