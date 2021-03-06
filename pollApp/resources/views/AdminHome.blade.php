<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Poll ||Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
    html,body { 
	height: 100%; 
}

.global-container{
	height:100%;
	display: flex;
	align-items: center;
	justify-content: center;
	background-color: #f5f5f5;
}

form{
	padding-top: 10px;
	font-size: 14px;
	margin-top: 30px;
}

.card-title{ font-weight:300; }

.btn{
	font-size: 14px;
	margin-top:20px;
}


.login-form{ 
	width:330px;
	margin:20px;
}

.sign-up{
	text-align:center;
	padding:20px 0 0;
}

.alert{
	margin-bottom:-30px;
	font-size: 13px;
	margin-top:20px;
}
    </style>     
</head>
<body>
    <div class="global-container">
        <div class="card login-form">
        <div class="card-body">
            <h3 class="card-title text-center">Add  Poll</h3>
            <div class="card-text">
                <!--
                <div class="alert alert-danger alert-dismissible fade show" role="alert">Incorrect username or password.</div> -->
                <form action="/addpoll" method="post">
                    @csrf
                    <!-- to error: add class "has-danger" -->
                    <div class="form-group">
                        <label for="exampleInputEmail1">Poll Name</label>
                        <input type="text" class="form-control form-control-sm" name="pollname" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Option 1</label>
                        <input type="text" class="form-control form-control-sm" name="Option_1" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Option 2</label>
                        <input type="text" class="form-control form-control-sm" name="Option_2" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Option 3</label>
                        <input type="text" class="form-control form-control-sm" name="Option_3" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Option 4</label>
                        <input type="text" class="form-control form-control-sm" name="Option_4" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-block">Add PoLL</button>
                    
                    
                </form>
            </div>
        </div>
        
    </div>

    </div>
  
      <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Poll Name</th>
            <th scope="col">Option 1</th>
            <th scope="col">Option 2</th>
            <th scope="col">Option 3</th>
            <th scope="col">Option 4</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($poll_list as $value)
            <tr>
              <th scope="row">{{$value->id}}</th>
              <td>{{$value->pollname}}</td>
              <td>{{$value->option_1}}</td>
              <td>{{$value->option_2}}</td>
              <td>{{$value->option_3}}</td>
              <td>{{$value->option_4}}</td>
              <td>{{$value->status}}</td>

            </tr>
            @endforeach
          
        </tbody>
      </table>

</body>
</html>