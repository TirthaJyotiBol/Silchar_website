<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Database</title>
    <link rel="shortcut icon" href="{{asset('asset/img/favicon.png')}}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
        crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('asset\css\adminDashboard.css')}}">
    <link rel="stylesheet" href="{{asset('asset\css\adminQueries.css')}}">
</head>
<body>
  <center> <h1> COLLEGE DATABASE </h1> </center>
<div class="table">
    <table class="table">
  <thead>
    <tr class="table-dark">
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      {{-- <th scope="col">Grade</th> --}}
      <th scope="col">Gender</th>
      <th scope="col">Age</th>
      <th scope="col">College</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>

  <tbody>
@foreach ($items as $data)
<tr>
    <td> {{$data->id}} </td>
    <td> {{$data->name}} </td>
    <td> {{$data->email}} </td>
    {{-- <td> {{$data->grade}}  </td> --}}
    <td>{{$data->gender}}</td>
    <td>{{$data->age}}  </td>
    <td>{{$data->college}}  </td>
   
       <td> 
        <button class="btn btn-danger" > <a href={{'/adminlogin/collegeDatabase/deleteCollege/'.$data->id}}>Delete</a> </button>
      </td>
  </tr>
@endforeach


  </tbody>
  </table>
    </div>

    <section>
        <x-footer/>
        <center>  
        <a href="/" id="home_link" class ="link" >Home</a>
        <a href="/admindashboard" id="dashboard_link" class ="link" >Dashboard</a>
        </center>
    </section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
    crossorigin="anonymous"></script>

</body>
</html>

 