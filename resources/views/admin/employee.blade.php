@extends('layouts.admin')

@section('title', 'Kepegawaian')

@section('content')
<div class="container">
    <h3 class="mb-4">Kepegawaian</h3>

    @if($employees->isEmpty())
        <div class="alert alert-info">
            Tidak ada data karyawan yang ditemukan.
        </div>
    @else
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Nomor Induk Pegawai</th>
                    <th>Keterangan</th>
                    <th>Bidang</th>
                </tr>
            </thead>
            <tbody>
                @foreach($employees as $employee)
                <tr>
                    <td>{{ $employee->id }}</td>
                    <td>{{ $employee->nama }}</td>
                    <td>{{ $employee->jabatan }}</td>
                    <td>{{ $employee->nomor_induk_pegawai }}</td>
                    <td>{{ $employee->keterangan }}</td>
                    <td>{{ $employee->bidang }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
