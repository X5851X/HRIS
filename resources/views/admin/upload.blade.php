@extends('layouts.admin')

@section('title', 'Upload File Excel')

@section('content')
<div class="container mt-4">
    <h2>Upload File Excel</h2>
    <hr>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="http://127.0.0.1:8000/admin/upload" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label for="file">Pilih File Excel:</label>
            <input type="file" name="file" id="file" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Upload</button>
    </form>
    <script src="{{ asset('js/upload.js') }}"></script>
</div>
@endsection
