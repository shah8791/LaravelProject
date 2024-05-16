 <!doctype html>
 <html lang="en">
   <head>
     <title>Home Page</title>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <style>
      #nav1{
        padding:30px;
      }
      body{
        background-image: url('images/employee.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
        
      }
      #footer{
        /* background-color: black; */
        text-align: center;
	      background-color: rgb(32, 33, 36);
	      color: #bbb;
	      padding: 35px;
        margin-top: 12%;
      }
      #nav1{
        padding:30px;
      }
     </style>
   </head>
   <body>
       
     <!-- Optional JavaScript -->
     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     
     <nav class="navbar navbar-expand-lg navbar-black bg-black" id="nav1">
      <a class="navbar-brand">Employee dashboard</a>
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
      <h2 class="text-center">Project Synopsys</h2>
      <h3><li><u>Project Title:</u><p>Development of a Laravel Application (App) for Employee Management System.</p></li></h3>
      <h3><li><u>Project Descriptions:</u><p>An employee dashboard is a data visualization tool that lets HR professionals view, track and analyze various key performance indicators in both the short and long term. Employee dashboards should be interactive, modern, and showcase human resources analytics and statistics. Employee dashboards should be easy to read and understand by presenting the data on a single screen.

Companies can then tailor these metrics in order to align with their goals. HR professionals use these metrics to enhance employee performance, improve recruitment strategies, and optimize workplace management. Common metrics shown are usually around health, recruiting, and safety.</p></li></h3>
    </div>
    <div class="foot">
      <h6 id="footer">Copyright © 2024. All right reserved.</h6>
    </div>
   </body>
 </html>