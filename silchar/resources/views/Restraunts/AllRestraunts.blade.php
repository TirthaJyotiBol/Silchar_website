<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Restraunts</title>
    <link rel="shortcut icon" href="{{asset('asset/img/favicon.png')}}" type="image/x-icon">
    <link rel="{{asset('asset/css/Restraunts/index.css')}}" href="style.css">
    <link rel="stylesheet" href="{{asset('asset/css/Restraunts/restraunt_card.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/Restraunts/allRestraunts.css')}}">

</head>
<body>
    
    <x-restraunt-navbar/>
    <x-upperedge/>
    {{-- <div class="image_portion"> 
        <form action="/searchRestraunt" method="post">
            @csrf
            <input type="text" name="search" id="search" placeholder="Search for Restraunt" > 
            <button type="submit" class="search_button" name="submit" >SEARCH</button>
        </form>

        <h1 class="silchar_eatery_heading" > SILCHAR EATERY </h1>
        <h3 class="silchar_eatery_quote" > Food , Dining and Happiness  Count memories, not calories </h3>
    </div> --}}

    <h1 class="heading_allRestraunts" > All Restraunts</h1>

    <div class="cardPortion">
    @foreach ($data as $items)
    <x-eaterycard image="{{asset('uploadImages/RestrauntImages/'.$items['picture'])}}" 
    name="{{$items->res_name}}"
    address="{{$items->address}}"
    email="{{$items->email}}"
    link="book/{{$items->res_id}}"
    button="BOOK"
    />
    @endforeach
    </div>
    

<x-footer/>

    
</body>
</html>
