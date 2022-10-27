@extends('layout')
@section('content')
        <section style="padding-top: 60px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="card">
                            <div class="card-header">
                                Edit Certificate Details
                                <a href="/admin" class="btn btn-success">Back</a>
                            </div>
                            <div class="card-body">
                                @if (Session::has('Edited details successflly'))
                                    <div class="alert alert-success" role="alert">
                                        {{ Session::get('Details_Edited') }}
                                    </div>
                                @endif
                                <form action="{{ route('certificate.update') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="hidden" name="id" value="{{ $certificate->id }}">
                                        <label for="number">number</label>
                                        <input type="text" name="number" class="form-control" placeholder="Confirm or Update number" value="{{ $certificate->number }}">
                                        <label for="Name">Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="UpdateName" value="{{ $certificate->name }}">
                                        <label for="as">as</label>
                                        <input type="text" name="as" class="form-control" placeholder="Update as" value="{{ $certificate->as }}">
                                        <label for="date">date</label>
                                        <input type="date" name="date" class="form-control" placeholder="Update date" value="{{ $certificate->date }}">
                                        <label for="description">description</label>
                                        <input type="text" name="description" class="form-control" placeholder="Update Final description" value="{{ $certificate->description }}">
                                        <label>Status</label>
                                        <select class="form-control" name="status" value="{{ $certificate->status }}">
                                            <option><span class="text-success">active</span></option>
                                            <option><span class="text-warning">not active</span></option>
                                            <option><span class="text-danger">expired</span></option>
                                        </select>
                                    <button type="submit" class="btn btn-success">Update Certificate</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
