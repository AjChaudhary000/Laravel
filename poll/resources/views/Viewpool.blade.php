<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Basic laravel</title>
</head>
<body class="container">


    
     @extends('template.layout')

     @section('content')

      <div class="viewpool mt-5">

        <h1 class="text-center">All POOLS</h1>
        @foreach($pools as $pool)

        <div class="row col-md-12 bg-secondary text-light border mt-3">
         <div class="col-md-2">
             <p class="p-1">{{$pool->Question}}</p>
         </div>
         <div class="col-md-2">
           <p class="p-1">{{$pool->opt1}}</p>
         </div>
         <div class="col-md-2">
            <p class="p-1">{{$pool->opt2}}</p>
          </div>
          <div class="col-md-2">
            <p class="p-1">{{$pool->opt3}}</p>
          </div>
          <div class="col-md-2">
            <p class="p-1">{{$pool->opt4}}</p>
          </div>
          <div class="col-md-2">
             
              @if($pool->status == 0)
              <a href="/activepool/{{$pool->id}}"><p class="btn btn-danger">Deactive</p></a> 
              @else
              <a href="/activepool/{{$pool->id}}"><p class="btn btn-success">Active</p></a>
           
              @endif
            
          </div>
        </div>

        
            
        @endforeach

      </div>

      @endsection
    
</body>
</html>