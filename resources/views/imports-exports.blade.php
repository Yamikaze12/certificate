@extends('layout')
@section('content')
<div class="container">
    <div class="card bg-light mt-3">
        <div class="card-header">
            Import Export Excel to database
        </div>
        <div class="card-body">
            <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-success">Import Data</button>
                <a class="btn btn-warning" href="{{ route('export') }}">Export Data</a>
                <a href="/admin" class="btn btn-primary">Admin Panel</a>
            </form>
        </div>
    </div>
</div>
   
@endsection