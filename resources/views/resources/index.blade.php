@extends('resources.layout')
@section('content')

    <!-- Main content -->
<!-- /.row -->
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Fixed Header Table</h3>
        @if(session()->get('success'))
        <div class="alert alert-success">
          {{ session()->get('success') }}  
        </div><br />
      @endif
        <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <input type="search" name="keyword" class="form-control float-left" placeholder="Search" value="{{ request('keyword') }}"/>

            <div class="input-group-append">
              <button type="submit" class="btn btn-default">
                <i class="fas fa-search"></i>
              </button>
              <a class="btn btn-primary ml-3" href="/certificates/create" role="button">Create</a>
              
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0" style="height: 300px;">
        <table class="table table-head-fixed text-nowrap">
          <thead>
            <tr>
              <th>Number</th>
              <th>User</th>
              <th>AS</th>
              <th>Date</th>
              <th>Status</th>
              <th>Description</th>
            </tr>
          </thead>
          <tbody>
            @foreach($Certificate as $Certificates)
            <tr>
              <td>{{ $Certificates->number }}</td>
              <td>{{ $Certificates->name }}</td>
              <td>{{ $Certificates->as }}</td>
              <td>{{ $Certificates->date }}</td>
              <td>{{ $Certificates->status }}</td>
              <td>{{ $Certificates->description }}</td>
              <td class="text-center">
                <a href="{{ route('certificates.edit', $Certificates->id)}}" class="btn btn-primary btn-sm">Edit</a>
                <form action="{{ route('certificates.destroy', $Certificates->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                  </form>
            </td>

            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>
    <!-- /.content -->

@endsection