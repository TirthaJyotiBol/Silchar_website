<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @foreach ($items as $item)
    <title>{{$item->res_name}}</title>
    @endforeach
    <link rel="shortcut icon" href="{{asset('asset/img/favicon.png')}}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
        crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('asset\css\Restraunts\addDishDatabase.css')}}">
</head>
<body>

@if (session()->has('noDishesMessage'))
      <p id="displayMessage" >
        {{session()->get('noDishesMessage');}}
      </p>
@endif


@if (session()->has('deleteMsg'))
<p id="displayMessage" >
 {{session()->get('deleteMsg');}}
</p>
@endif


@foreach ($items as $item)
<center><a id="name_heading" href="/restraunt"><h1> {{$item->res_name}} </h1> </a>  </center>
<a href={{"addDishForm/".$item['res_id']}}><button  id="addDishButton" class="btn btn-success" >ADD DISH </button></a>
<a href={{"deleteRestraunt/".$item['res_id']}}><button  id="addDishButton" class="remove btn btn-danger" >REMOVE RESTRAUNT </button></a>
@break;
@endforeach


<div class="table">
    <table class="table">
  <thead>
    <tr class="table-dark">
      <th scope="col">Dish</th>
      <th scope="col">Price</th>
      <th scope="col">Operation</th>
      <th scope="col">Add Dish</th>
      <th scope="col">Picture</th>
    </tr>
  </thead>
  @foreach ($items as $item)
  <tbody>
    
    <tr>
   
      <th  class="item_display"  scope="row">  {{$item->dish}} </th>
      <td class="item_display" > ₹{{$item->price}}  </td>
      <td class="item_display" ><button class="btn btn-danger" > <a href={{"delete/".$item['id']}}>DELETE</a> </button></td>
      <td class="item_display" ><a href={{"addDishForm/".$item['res_id']}}><button  class="btn btn-success" >ADD DISH </button></a></td>
      <td> <img id="image_dish" src="{{asset('uploadImages/DishImages/'.$item['picture'])}}" alt="Loading"> </td>
    </tr>
    
  </tbody>
  @endforeach
  </table>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
    crossorigin="anonymous"></script>

  

</body>
</html>





