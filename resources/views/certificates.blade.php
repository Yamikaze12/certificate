@extends('layout')
@section('content')
        <section style="padding-top: 60px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="card">
                            <div class="card-header" ><center><h3>Certificate DB</h3></center>
                                <table>
                                    <tr>
                                        <td style="width: 16%"><a href="/add-certificate" class="btn btn-success">Add New Certificate</a></td>
                                        <form action="{{ route('certificate.adminSearch') }}">
                                        <td style="width: 50%"><input type="text" name="search" class="form-control" placeholder="Search Certificate ID or Student Name"></td>
                                        <td style="width: 8%"><button type="submit"  class="btn btn-success">Search</button></td>
                                        </form>
                                        <td style="width: 8%"><a href="/admin" class="btn btn-primary">Refresh</a></td>
                                        <td style="width: 10%"><a href="/imports-exports" class="btn btn-warning">Bulk Im/Ex</a></td>
                                        
                                    </tr>

                                </table>

                            </div>
                            <div class="card-body">
                                @if (Session::has('post-deleted'))
                                    <div class="alert-success" role="alert">
                                        {{ Session::get('post_deleted') }}
                                    </div>
                                @endif
                                <table class="table table-striped">
                                <thead>
                                    <tr>
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
                                            <td>
                                                <a href="/delete-certificate/{{ $certificate->id }}" class="btn btn-danger">Delete</a>
                                                <a href="/edit-certificate/{{ $certificate->id }}" class="btn btn-success">Edit</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            </div>
                            <div class="card-footer">
                                {{ $certificates->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection

