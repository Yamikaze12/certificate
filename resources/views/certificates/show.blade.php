@extends('certificates.layout')
@section('search')
<div class="col-md-6">
  <div class="card" style="width: 18rem;">
      <div class="card-body">
          @foreach ($Certificate as $Certificates)
        <h5 class="card-title">{{ $Certificates->name }}</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{ $Certificates->number }}</h6>
        <p class="card-text">{{ $Certificates->date }}</p>
        <p class="card-text">{{ $Certificates->as }}</p>
        <p class="card-text">{{ $Certificates->description }}</p>
        <p class="card-text">{{ $Certificates->status }}</p>
          @endforeach
      </div>
    </div>
</div>
@endsection
