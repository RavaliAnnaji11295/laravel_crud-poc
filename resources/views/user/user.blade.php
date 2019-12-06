

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
        <h2>Registration Form</h2>
        <form method = "post" action = "{{ url('user/store') }}">	
        @csrf       
                <div class = "form-group">			
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">    
                </div>
                <div class = "form-group">			
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">    
                </div>		
                <div class = "form-group">			
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="mobile" placeholder="Enter Mobile number" name="mobile">    
                </div>	
                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea class="form-control" rows="5" id="address"></textarea>
                </div>      
                <div class="form-group">
                    <button  class="btn btn-success" type="submit" id="register" name="register">Create</button></td>		
                </div>	
        </form> 
        </div>
        @show
    </body>
</html>