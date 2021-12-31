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

     <div class="pool mt-5">

     <form method="POST" action="/submit_pool" class="row g-3">
      @csrf
        <div class="col-md-10">
          <label for="inputEmail4" class="form-label">Enter Question</label>
          <input type="text" name="question" class="form-control" >
        </div>
        <div class="col-md-5">
          <label for="inputPassword4" class="form-label">Option 1</label>
          <input type="text" name="que1" class="form-control" >
        </div>
        <div class="col-5">
          <label for="inputAddress" class="form-label">Option 2</label>
          <input type="text" name="que2" class="form-control" id="inputAddress" >
        </div>
        <div class="col-5">
          <label for="inputAddress2" class="form-label">Option 3</label>
          <input type="text" name="que3" class="form-control" id="inputAddress2" >
        </div>
        <div class="col-md-5">
          <label for="inputCity" class="form-label">Option 4</label>
          <input type="text" name="que4" class="form-control" id="inputCity">
        </div>
    
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>

    

      @endsection
    
</body>
</html>