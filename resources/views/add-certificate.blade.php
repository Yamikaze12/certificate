@extends('layout')
@section('content')
        <section style="padding-top: 60px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="card">
                            <div class="card-header">Add Certificate Data <a href="/admin" class="btn btn-success">Back</a></div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('certificate.create') }}">
                                    @csrf
                                    <div class="form-group">
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
                                        <!-- <button type="submit" class="btn btn-success">Add Details</button> -->
                                        <button type="submit" onclick="return confirm('are you sure you want to create data?')"
                                        class="btn btn-primary">Save</button>
                                        <a class="btn btn-warning" href="/admin"> Go Back</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection

