<link rel="shortcut icon" href="{{asset('asset/img/favicon.png')}}" type="image/x-icon">
<link rel="stylesheet" href="{{asset('asset/css/Restraunts/index.css')}}">
<link rel="stylesheet" href="{{asset('asset/css/Restraunts/restraunt_card.css')}}">

<div class="image_portion">

    <form action="/searchRestraunt" method="post">
        @csrf
        <input type="text" name="search" id="search" placeholder="Search for Restraunt" required> 
        <button type="submit" class="search_button" name="submit" >SEARCH</button>
    </form>
    
    @if (session()->has('restraunt_deleted_message'))
    <center><h1>{{session()->get('restraunt_deleted_message')}}</h1></center>
   @endif

    @if (session()->has('notFoundMessage'))
    <center><h1>{{session()->get('notFoundMessage')}}</h1></center>
   @endif

    @if (session()->has('payment_message'))
    <center><h1>{{session()->get('payment_message')}}</h1></center>
   @endif

    <h1 class="silchar_eatery_heading" > SILCHAR EATERY </h1>
    <h3 class="silchar_eatery_quote" > Food , Dining and Happiness  Count memories, not calories </h3>
</div>