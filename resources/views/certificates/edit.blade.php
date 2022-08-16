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
        <div class="card push-top mb-5">
            <div class="card-header">
                Edit & Update
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
                <form method="post" action="{{ route('certificates.update', $Certificate->id) }}">
                    <div class="form-group">
                        @csrf
                        @method('PATCH')
                        <label for="number">number</label>
                        <input type="text" class="form-control" name="number" value="{{ $Certificate->number }}" />
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $Certificate->name }}" />

                    </div>
                    <div class="form-group">
                        <label for="as">as</label>
                        <input type="text" class="form-control" name="as" value="{{ $Certificate->as }}" />
                    </div>
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date" class="datepicker form-control" name="date"
                            value="{{ $Certificate->as }}" />
                    </div>
                    <div class="form-group">
                        <label for="description">description</label>
                        <input type="text" class="form-control" name="description"
                            value="{{ $Certificate->description }}" />
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="status" value="{{ $Certificate->description }}">
                            <option><span class="text-success">active</span></option>
                            <option><span class="text-warning">not active</span></option>
                            <option><span class="text-danger">expired</span></option>
                        </select>
                    </div>
                    <button type="submit" onclick="return confirm('are you sure you want to update the data?')"
                        class="btn btn-primary">Update</button>
                    <a class="btn btn-warning" href="{{ route('certificates.index') }}"> Go Back</a>
                </form>
            </div>
        </div>
    </div>

@endsection
