@extends('certificates.layout')
@section('content')
    <div class="container">
        <div class="card push-top">
            <div class="push-top">
                @if (session()->get('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div><br />
                @endif
                <div class="card-header">
                    Certificate
                    <a class="btn btn-success" href="{{ route('certificates.create') }}"> Add Certificate</a>
                    
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <form action="{{ route('certificates.index') }}" method="GET">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="search" name="search" value="{{ old('search') }}">
                                    
                                      <button class="btn btn-outline-secondary" type="submit">Search</button>
                                    </div>
                                  
                            </form>
                        </div>
                    </div>
                    <table class="table">
                        <thead>
                            <tr class="table-warning">
                                <th>NO</th>
                                <th>Number</th>
                                <th>User</th>
                                <th>AS</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Description</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($certificates as $certificate)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $certificate->number }}</td>
                                    <td>{{ $certificate->name }}</td>
                                    <td>{{ $certificate->as }}</td>
                                    <td>{{ $certificate->date }}</td>
                                    <td>{{ $certificate->status }}</td>
                                    <td>{{ $certificate->description }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('certificates.edit', $certificate->id) }}"
                                            class="btn btn-primary btn-sm">Edit</a>
                                        <form action="{{ route('certificates.destroy', $certificate->id) }}" method="post"
                                            style="display: inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Want to Delete Data?')"
                                                class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="py-2">
                        {{ $certificates->links() }}
                    </div>

                </div>


                {{-- {!! $Certificates->links() !!} --}}
            </div>
        </div>
        <div>
        @endsection
