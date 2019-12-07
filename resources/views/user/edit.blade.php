<html>
    <head>
        <title></title>\
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        @section('sidebar')
        <div class="container">
        <h2>Edit User Data</h2>
        <form method = "put" action = "{{ url('user/update' , $findone->id) }}">	
        @csrf       
                <div class = "form-group">			
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value = "{{$findone->name}}" required>    
                </div>
                <div class = "form-group">			
                    <label for="name">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" value = "{{$findone->email}}" required>    
                </div>		
                <div class = "form-group">			
                    <label for="name">Phone</label>
                    <input type="number" class="form-control" id="mobile" placeholder="Enter Mobile number" name="mobile" value = "{{$findone->mobile}}" required>    
                </div>	
                <div class="form-group">
                    <label for="Address">Address</label>
                    <textarea class="form-control" rows="5" id="address" name="address" required>{{$findone->address}}</textarea>
                </div>      
                <div class="form-group">
                    <button  class="btn btn-success" type="submit" id="update" name="update">Upadate</button></td>		
                </div>	
        </form> 
        </div>
        @show
    </body>
</html>