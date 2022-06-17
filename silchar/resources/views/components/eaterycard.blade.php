<link rel="stylesheet" href="{{asset('asset/css/Restraunts/restraunt_card.css')}}">

<div class="card_food">
    <img id="cardImage" src={{$image}} alt="dada">
    <h2 id="restraunt_name" > {{$name}} </h2>
    <h3 id="address_email" > {{$address}} </h3>
    <h3 id="address_email" class="email_card_eatery" > {{$email}} </h3>
    <a href="{{$link}}"><button id="button_book" type="submit">{{$button}}</button></a>
</div>