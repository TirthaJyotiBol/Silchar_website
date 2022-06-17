<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restraunt</title>
    <link rel="shortcut icon" href="{{asset('asset/img/favicon.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('asset/css/Restraunts/index.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/Restraunts/restraunt_card.css')}}">
    

</head>
<body>
    <x-restraunt-navbar/>
    <x-upperedge/>

    <h1 class="heading_allRestraunts" > Select By Categories </h1>

    <div class="cardPortion">
        <x-eaterycard image="{{asset('uploadImages\generalImages\family.png')}}" 
        name=" "
        address=""
        email=""
        link=""
        button="Friends And Hangout"
        />

        <x-eaterycard image="{{asset('uploadImages\generalImages\familyFriend.jpg')}}" 
        name=""
        address=""
        email=""
        link=""
        button="Family Friendly"
        />

        <x-eaterycard image="{{asset('uploadImages\generalImages\meetings.png')}}" 
        name=""
        address=""
        email=""
        link=""
        button="Business Meetings"/>

        <x-eaterycard image="{{asset('uploadImages\generalImages\party.png')}}" 
        name=""
        address=""
        email=""
        link=""
        button="Party"
        />

        <x-eaterycard image="{{asset('uploadImages\generalImages\formal.jpg')}}" 
        name=""
        address=""
        email=""
        link=""
        button="Formal"
        />

        <x-eaterycard image="{{asset('uploadImages\generalImages\casual.jpg')}}" 
        name=""
        address=""
        email=""
        link=""
        button="Casual"
        />
    </div>


            <h1 class="heading_allRestraunts" > Restraunts At Different Locations</h1>

            <div class="buttons_differentaddress">
                @foreach ($data as $items)
                <a href="/address/{{$items->address}}"> <button id="dascolony" class="dascolony"  type="submit">{{$items->address}}</button> </a> 
                @endforeach
            </div>

            <x-footer/>

</body>
</html>
