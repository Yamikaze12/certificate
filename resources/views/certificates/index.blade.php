@extends('certificates.layout')
@section('content')
<div class="container">
<div class="card push-top">
  <div class="push-top">
    @if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}  
      </div><br />
    @endif
  <div class="card-header">
  Certificate
  <a class="btn btn-success" href="{{ route('certificates.create') }}"> Add Certificate</a>
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
        @foreach($Certificate as $Certificates)
        <tr>
          <td>{{ ++$i }}</td>
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
                <button type="submit" onclick="return confirm('Want to Delete Data?')" class="btn btn-block btn-danger">Delete</button>
              </form>
        </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
</div>
<div>
@endsection