<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <style>
      .container{
        padding: 3%;
      }
      #last_heading{
        text-align: center;
	      background-color: rgb(32, 33, 36);
	      color: #bbb;
	      padding: 35px;
      }
      #nav1{
        padding:30px;
      }
    </style>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light" id="nav1">
      <a class="navbar-brand" href="#">Employee Dashboard</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="{{url('')}}">Home <span class="sr-only"></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/form')}}">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{'/employee/view'}}">Employees</a>
          </li>
        </ul>
      </div>
    </nav>
      
  <div class="container">
    <form action="{{url('/')}}/form" method="post">
      @csrf
      <h3 class="tex-center text-primary">Employee Registration </h3>
      <div class="form-group">
          <label for="">First Name</label>
          <input type="firt_name" name="first_name" id="" class="form-control" value="{{old('first_name')}}"/>
          <span class="text-danger">
            @error('first_name')
              {{$message}}
            @enderror
          </span>
      </div>

      <div class="form-group">
          <label for="">Last Name</label>
          <input type="last_name" name="last_name" id="" class="form-control" value="{{old('last_name')}}"/>
          <span class="text-danger">
            @error('last_name')
              {{$message}}
            @enderror
          </span>
        </div>

        <div class="form-group">
          <label for="exampleFormControlSelect1">Gender</label>
          <select class="form-control" id="exampleFormControlSelect1" name="gender" value="{{old('gender')}}">
            <span class="text-danger">
              @error('gender')
                {{$message}}
              @enderror
            </span>

            <option>Please Select One</option>
            <option>Male</option>
            <option>Female</option>s
            <option>Other</option>
          </select>
        </div>

        <div class="form-group">
          <label for="">Email ID</label>

          <input type="email" name="email" id="" class="form-control" value="{{old('email')}}"/>
          <span class="text-danger">
            @error('email')
              {{$message}}
            @enderror
          </span>
        </div>

        <div class="form-group">
          <label for="">Address</label>
          <input type="address" name="address" id="" class="form-control" value="{{old('address')}}"/>
          <span class="text-danger">
            @error('address')
              {{$message}}
            @enderror
          </span>
        </div>

        <div class="form-group">
          <label for="">Department</label>
          <input type="department" name="department" id="" class="form-control" value="{{old('department')}}"/>
          <span class="text-danger">
            @error('department')
              {{$message}}
            @enderror
          </span>
        </div>

        <div class="form-group">
          <label for="">Mobile</label>
          <input type="mobile" name="mobile" id="" class="form-control" value="{{old('mobile')}}"/>
          <span class="text-danger">
            @error('mobile')
              {{$message}}
            @enderror
          </span>
        </div>
        <div class="clo-9">
        <button class="btn btn-primary col-12">Submit</button>
        </div>
    </form>
  </div>

  <div class="foot">
    <h6 id="last_heading">Copyright © 2024. All right reserved.</h6>
  </div>
  </body>
</html>