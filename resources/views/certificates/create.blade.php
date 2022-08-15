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
<div class="card push-top">
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
              <input type="text" class="form-control" name="number"/>
          </div>
          <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="as">as</label>
              <input type="text" class="form-control" name="as"/>
          </div>
          <div class="form-group">
            <label for="date">Date</label>
            <input type="date" class="datepicker" name="date"/>
        </div>
          <div class="form-group">
              <label for="description">description</label>
              <input type="text" class="form-control" name="description"/>
          </div>
          <div class="form-group">
            <label>Status</label>
            <select class="form-control" name="status">
              <option><span class="text-success">active</span></option>
              <option><span class="text-warning">not active</span></option>
              <option><span class="text-danger">expired</span></option>
            </select>
          </div>
          <button type="submit" class="btn btn-block btn-danger">Create</button>
          <a class="btn btn-success mt-2" href="{{ route('certificates.index') }}"> Go Back</a>
      </form>
  </div>
</div>
</div>
@endsection