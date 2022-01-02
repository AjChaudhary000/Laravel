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
            <div class="card-text">
                <!--
               
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">Incorrect username or password.</div> -->
                 @if (count($pollData) == 1)
              <form action="/Showresult" method="post">
                @csrf                      
                       <!-- to error: add class "has-danger" -->
                    
                     <div class="form-group">
                       <div class="card border-info mb-4 ">

                      <div class="d-flex justify-content-between align-items-center card-header bg-info text-white" id="h1">
                        <span>{{$pollData[0]->pollname}}</span>
                        <button type="button" data-toggle="collapse" data-target="#q1" aria-expanded="false" aria-controls="q1" class="btn btn-outline-light"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                          </svg>
                        </button>
                      </div>
                      <div id="q1" class="collapse show" aria-labelledby="h1">
                        <div class="card-body">
                        
                  
                          <div class="form-check">
                            <input type="hidden" name="id" value={{$pollData[0]->id}}>
                            <input class="form-check-input" type="radio" name="q1" id="q1_r1" value="r1">
                            <label class="form-check-label" for="q1_r1">
                              {{$pollData[0]->option_1}}
                            </label>
                          </div>
                  
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="q1" id="q1_r2" value="r2">
                            <label class="form-check-label" for="q1_r2">
                              {{$pollData[0]->option_2}}
                            </label>
                          </div>
                  
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="q1" id="q1_r3" value="r3">
                            <label class="form-check-label" for="q1_r3">
                              {{$pollData[0]->option_3}}
                            </label>
                          </div>
                  
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="q1" id="q1_r4" value="r4">
                            <label class="form-check-label" for="q1_r4">
                              {{$pollData[0]->option_4}}
                            </label>
                          </div>
                  
                        </div>
                  
                      </div>
                    </div>
                  
                  
                 </div>
                 <button type="submit" class="btn btn-primary btn-block">Show Result</button>
              </form>
             @endif
                  
             @if (count($pollData) == 0)
                    <div class="form-group">
                      <div class="card border-info m-2 p-4">
                        <div class="form-check p-2">
                        <div class="progress">
                          <div class="progress-bar progress-bar-striped" role="progressbar" style="width:{{$p1}}%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">A</div>
                        </div>
                        </div>
                        <div class="form-check p-2">
                          <div class="progress">
                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width:{{$p2}}%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">B</div>
                          </div>
                          </div>
                          <div class="form-check p-2">
                            <div class="progress">
                              <div class="progress-bar progress-bar-striped" role="progressbar" style="width:{{$p3}}%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">C</div>
                            </div>
                            </div>
                            <div class="form-check p-2">
                              <div class="progress">
                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width:{{$p4}}%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">D</div>
                              </div>
                              </div>
                        
                     
                     
                   </div>
                </div>
            @endif
            </div>
        </div>
    </div>
    </div>
    
</body>
</html>