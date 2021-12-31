<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  
    <title>Result Page</title>
</head>
<body class="container">

    <div class="mt-5">

        @foreach($POOL as $pl)
        <h1>{{$pl->Question}}</h1> 
        
        @endforeach
        
        
     
        <h1 class="text-success mt-2">{{round($per1)}}
           @for($i = 0; $i < $per1; $i++)
              {{"-"}} 
           @endfor
        </h1>
        <h1 class="text-warning">{{round($per2)}}
            @for($i = 0; $i < $per2; $i++)
            {{"-"}} 
         @endfor
        </h1>
        <h1 class="text-danger">{{round($per3)}}
            @for($i = 0; $i < $per3; $i++)
            {{"-"}} 
         @endfor
        </h1>
        <h1 class="text-info ">{{round($per4)}}
            @for($i = 0; $i < $per4; $i++)
            {{"-"}} 
         @endfor
        </h1>

            
     

    </div>

    
</body>
</html>