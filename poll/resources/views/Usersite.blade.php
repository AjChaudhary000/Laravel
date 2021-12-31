<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>User Site</title>
</head>
<body class="container">

       <div class="user mt-5">

        <h1 class="text-center">Welcome to user page</h1>

        
          <table class="mt-3">
              <form action="/userans" method="post">
                @csrf
            @foreach($pools as $pool)
                <tr>
                    <td><h1>{{$pool->Question}}</h1></td>
                </tr>
                <tr>
                    <td><input type="hidden" value="{{$pool->id}}" name="poolid" /></td>
                </tr>
                <tr class="mt-3">
                    <td class="col-3"><p>{{$pool->opt1}}</p></td>
                    <td><input type="radio" value="1" name="ans" /></td>
                </tr>
                <tr>
                    <td><p>{{$pool->opt2}} </p></td>
                    <td><input type="radio" value="2" name="ans" /></td>
                </tr>
                <tr>
                    <td><p>{{$pool->opt3}}</p></td>
                    <td><input type="radio" value="3" name="ans" /></td>
                </tr>
                <tr>
                    <td><p>{{$pool->opt4}}</p></td>
                    <td><input type="radio" value="4" name="ans" /></td>
                </tr>
               
                <tr>
                    <td><input  class=" form-control btn-info" type="submit"/></td>
                   <td class="btn btn-info mr-2"><a href="/viewans/{{$pool->id}}">View Result</a></td>
                </tr>
                
               
            </form> 
            @endforeach

            
         
          </table>
        

       </div>
    
</body>
</html>