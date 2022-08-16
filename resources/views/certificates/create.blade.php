@extends('certificates.layout')
@section('content')
    <div class="container">
        <style>
            .container {
                max-width: 450px;
            }

            .push-top {
                margin-top: 50px;
            }
        </style>
        <div class="card push-top mx-auto mb-5">
            <div class="card-header">
                Add Certificate
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                @endif
                <form method="post" action="{{ route('certificates.store') }}">
                    <div class="form-group">
                        @csrf
                        <label for="number">Number</label>
                        <input type="text" class="form-control @error('number') is-invalid @enderror" name="number" />
                        @error('number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" />
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="as">as</label>
                        <input type="text" class="form-control @error('as') is-invalid @enderror" name="as" />
                        @error('as')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date" class=" form-control datepicker @error('date') is-invalid @enderror"
                            name="date" />
                        @error('date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">description</label>
                        <input type="text" class="form-control" name="description" />
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="status">
                            <option><span class="text-success">active</span></option>
                            <option><span class="text-warning">not active</span></option>
                            <option><span class="text-danger">expired</span></option>
                        </select>
                    </div>
                    <button type="submit" onclick="return confirm('are you sure you want to create data?')"
                        class="btn btn-primary">Save</button>
                    <a class="btn btn-warning" href="{{ route('certificates.index') }}"> Go Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection
