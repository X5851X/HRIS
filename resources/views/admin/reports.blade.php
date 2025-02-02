@extends('layouts.admin')

@section('title', 'Reports')

@section('content')
<div class="container">
    <h3 class="mb-4">Laporan Kehadiran</h3>

    @if($attendanceData->isEmpty())
        <div class="alert alert-info">Belum ada data kehadiran.</div>
    @else
        <div class="row">
            <div class="col-md-6">
                <canvas id="attendanceChart"></canvas>
            </div>
            <div class="col-md-6">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Status</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($attendanceData as $data)
                        <tr>
                            <td>{{ ucfirst($data->status) }}</td>
                            <td>{{ $data->total }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var ctx = document.getElementById('attendanceChart').getContext('2d');
        var attendanceChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: @json($attendanceData->pluck('status')),
                datasets: [{
                    data: @json($attendanceData->pluck('total')),
                    backgroundColor: ['#4CAF50', '#FF5733', '#FFC107']
                }]
            }
        });
    });
</script>
@endsection
