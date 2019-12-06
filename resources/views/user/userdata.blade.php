<!DOCTYPE html>
<html lang="en">
<head>
  <title>User Data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>All Users Information</h2>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">S.No.</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Address</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($users as $key=>$value)
      <tr>
        <td>{{$value->id}}</td>
        <td>{{$value->name}}</td>
        <td>{{$value->email}}</td>
        <td>{{$value->mobile}}</td>
        <td>{{$value->address}}</td>
        <td>
        <a href ="{{ url('user/edit' , $value->id) }}"><button class="btn btn-primary" type= "button" id="edit" name="edit" >Edit</button></a>
        <a href ="{{ url('user/delete' , $value->id) }}"><button class="btn btn-danger" id="dalete" name="delete">Delete</button></a>
        </td>

      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
