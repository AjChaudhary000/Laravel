

    @extends('Template.layout')
    @section('content')
        <h1> home</h1>
        <div>
            <form action="/AddReg" method="POST">
                @csrf
                <input type="text" name="uname" id="" placeholder="Enter the username ">
                <input type="text" name="upass" id="" placeholder="Enter the password ">
                <input type="text" name="umobile" id="" placeholder="Enter the mobile no ">
                <input type="submit" name="Reg" value="Reg">
            </form>
            <table class="table">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">pass</th>
                    <th scope="col">mobileno</th>
                    
                  </tr>
                </thead>
                <tbody>
                    @foreach ($user as $value)
                    <tr>
                      <th scope="row">{{$value->id}}</th>
                      <td>{{$value->uname}}</td>
                      <td>{{$value->pass}}</td>
                      <td>{{$value->mobileno}}</td>
                      <td><a href="/deleteuser/{{$value->id}}">Delete</a></td>
                      <td><a href="/edituser/{{$value->id}}">edit</a></td>
                    </tr>
                    @endforeach
                  
                </tbody>
              </table>
        </div>
    @endsection

