<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Restraunt</title>
    <link rel="stylesheet" href="{{asset('asset\css\Restraunts\book_restraunts_form.css')}}">
    <link rel="shortcut icon" href="{{asset('asset/img/favicon.png')}}" type="image/x-icon">
</head>
<body>

<style>
    .displayFormPage{
        display: flex;
    }
</style>

<div class="displayFormPage" >
    @foreach ($data as $item)
    <x-restrauntbook resname="{{$item->res_name}}"/>
        
    @break;
    @endforeach

<div id="part_two" >

    @if (session()->has('message'))
    <div class="showFailureMessage">
        {{session()->get('message');}}
    </div>
    @endif

    @if (session()->has('success'))
    <div class="showSuccessMessage">
        {{session()->get('success');}}
    </div>
    @endif

    @foreach ($data as $item)
    <h1 id="restraunt_details" >{{$item->res_name}}</h1>
    <p id="restraunt_details" ><strong>Phone : </strong> {{$item->phone}} </p>
    <p id="restraunt_details" ><strong>Email : </strong> {{$item->email}} </p>
    @break;
    @endforeach

    <h3>Dishes</h3>
    @foreach ($data as $item)
    <x-restrauntbooktwo
    email=""
    phone=""
    dishname="{{$item->dish}}"
    image="{{asset('uploadImages/DishImages/'.$item->picture)}}"
    />
    @endforeach
</div>

</div>