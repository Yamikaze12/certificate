<div class="col-md-6">
    <div class="card">
        <div class="card-body">
            
                    @foreach ($Certificate as $certificate)
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

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header">Test</div>
                <div class="card-body">
		          <div class="card">
                    <div class="card-header"><b>{{ $searchResults->count() }} results found for "{{ request('query') }}"</b></div>

                    <div class="card-body">

                        @foreach($searchResults->groupByType() as $type => $modelSearchResults)
                            <h2>{{ ucfirst($type) }}</h2>

                            @foreach($modelSearchResults as $searchResult)
                                <ul>
                                    <li><a href="{{ $searchResult->url }}">{{ $searchResult->number }}</a></li>
                                </ul>
                            @endforeach
                        @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}