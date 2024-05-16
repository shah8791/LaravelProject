<!doctype html>
<html lang="en">
  <head>
    <title>Employees</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <style>
      .container{
        padding: 3%;
      }
      #btn1{
        float: right;
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
  
  <!-- this code for navbar -->
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
          <!-- <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li> -->
        </ul>
      </div>
    </nav>
    
    <div class="container">
      <form action="">
        <div class="form-group">
          <input class="form-control" type="search" name="search" placeholder="Search by name and email" value="{{$search}}" />
        </div>
        <button class="brn btn-primary" id="btn1">Search</button>
      </form>

        <table class="table">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Gender</th>
                    <th>Email ID</th>
                    <th>Address</th>
                    <th>Department</th>
                    <th>Mobile</th>
                    <th>Created At</th>
                    <th>Action</th>
                    
                </tr>
            </thead>
            <tbody>
              @foreach($employees as $data)
                <tr>
                    <td>{{$data->first_name}}</td>
                    <td>{{$data->last_name}}</td>
                    <td>{{$data->gender}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->address}}</td>
                    <td>{{$data->department}}</td>
                    <td>{{$data->mobile}}</td>  
                    <td>{{\Carbon\Carbon::parse($data->created_at)->format('d M,Y')}}</td>        

                    <td>
                      <a href="{{url('/employee/delete/')}}/{{$data->employee_id}}"><button class="btn btn-danger">Delete</button></a>
                    </td>
                    <td>
                      <a href="{{route('employee.edit',['id'=>$data->employee_id])}}"><button class="btn btn-primary">Update</button></a> 
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>
    <div class="foot">
      <h6 id="last_heading">Copyright © 2024. All right reserved.</h6>
    </div>
    
  </body>
</html>