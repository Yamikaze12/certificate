@section('search')
<div class="col-md-6">
    <div class="card">
        <div class="card-body">
        @foreach($Certificate as $certificate)
            <h5 class="card-title">{{ $certificate->name }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $certificate->number }}</h6>
            <p class="card-text">{{ $certificate->date }}</p>
            <p class="card-text">{{ $certificate->as }}</p>
            <p class="card-text">{{ $certificate->description }}</p>
            <p class="card-text">{{ $certificate->status }}</p>
        @endforeach 
        </div>
    </div>
</div>
@endsection