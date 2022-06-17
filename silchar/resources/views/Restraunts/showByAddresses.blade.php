<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @foreach ($add as $item)
    <title>{{$item->address}}</title>
    @break;
    @endforeach
    
    <link rel="shortcut icon" href="{{asset('asset/img/favicon.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('asset/css/Restraunts/index.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/Restraunts/restraunt_card.css')}}">

</head>
<body>
    <x-restraunt-navbar/>
    <x-upperedge/>

    
    @foreach ($add as $item)
    <h1 class="heading_allRestraunts" > Restraunts At {{$item->address}}</h1>
    @break;
    @endforeach
            
    
    <div class="cardPortion">
    @foreach($add as $item)
    <x-eaterycard image="{{asset('uploadImages/RestrauntImages/'.$item['picture'])}}" 
    name="{{$item->res_name}}"
    address="{{$item->address}}"
    email="{{$item->email}}"
    link="book/{{$item->res_id}}"
    button="BOOK"
    />
    @endforeach
    </div>

    <x-footer/>
</body>
</html>
