<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Dasboard</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
   </head>
   <body>
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
    Add Certificatae
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
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="number">Number</label>
              <input type="text" class="form-control" name="number"/>
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
              <option><span class="text-success">Approved</span></option>
              <option><span class="text-warning">Pendding</span></option>
              <option><span class="text-danger">Canceled</span></option>
            </select>
          </div>
          <button type="submit" class="btn btn-block btn-danger">Create</button>
      </form>
  </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" type="text/js"></script>
<!-- Javascript Bootstrap Datepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>


<script type="text/javascript">
$('.datepicker').datepicker({
                format: 'dd/mm/yyyy',
                autoclose: true,
                todayHighlight: true
            });
</script>
</body>
</html>