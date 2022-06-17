<!--  id login successful then redirect to this page -->

<!-- This page provides link to admin to redirect to different pages showing data of different fields -->

<title> Admin DashBoard </title>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
        crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('asset\css\adminDashboard.css')}}">
    <title>Admin Dashboard</title>
</head>
<body>
    <center> <h1> ADMIN DASHBOARD </h1> </center> 

    <div class="table">
    <table class="table">
  <thead>
    <tr class="table-dark">
      <th scope="col">Serial</th>
      <th scope="col">CONTENT</th>
      <th scope="col">LINK - ASSOCIATES</th>
    </tr>
  </thead>
  <tbody>


    <tr>
      <th scope="row">1</th>
      <td>School Bookings</td>
      <td> <button type="button" class="btn btn-danger"> <a href="/adminlogin/schoolDatabase">School</a> </button> </td>
    </tr>

    <tr>
      <th scope="row">2</th>
      <td>College Bookings</td>
      <td> <button type="button" class="btn btn-danger"> <a href="/adminlogin/collegeDatabase">College</a> </button> </td>
    </tr>


    <tr>
    <th scope="row">3</th>
      <td>Doctors</td>
      <td> <button type="button" class="btn btn-danger"> <a href="/adminlogin/doctorDatabase">Doctor</a> </button> </td>
    </tr>

    <tr>
    <th scope="row">4</th>
      <td>Travel Bookings</td>
      <td> <button type="button" class="btn btn-danger"><a href="/adminlogin/travelDatabase">Travel</a></button> </td>
    </tr>

    <tr>
    <th scope="row">5</th>
      <td>Restraunt Bookings</td>
      <td> <button type="button" class="btn btn-danger"> <a href="/adminlogin/foodDatabase">Food</a></button>  </td>
    </tr>

    <tr>
    <th scope="row">6</th>
      <td>Hotel Bookings</td>
      <td> <button type="button" class="btn btn-danger"> <a href="/adminlogin/hotelsDatabase">Hotels</a> </button> </td>
    </tr>

    <tr>
    <th scope="row">7</th>
      <td>Groceries Bookings</td>
      <td> <button type="button" class="btn btn-danger"> <a href="/adminlogin/groceriesDatabase">Groceries</a> </button> </td>
    </tr>

    <tr>
    <th scope="row">8</th>
      <td>Queries</td>
      <td> <button type="button" class="btn btn-danger"> <a href="/adminlogin/query">Queries</a> </button> </td>
    </tr>


    <tr>
    <th scope="row">9</th>
      <td>Add Doctor</td>
      <td> <button type="button" class="btn btn-danger"> <a href="/adminlogin/addDoctor">Add</a> </button> </td>
    </tr>

  </tbody>
  </table>
    </div>

    <div id="footer">
      <x-footer/>
    </div>
    
   <center> <a id="home" href="/"> HOME </a> </center> 


</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
    crossorigin="anonymous"></script>
</html>


