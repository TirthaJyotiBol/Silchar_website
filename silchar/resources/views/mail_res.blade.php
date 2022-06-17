{{-- This is the View of the google mail --}}

<style>
#one{
    margin-left: 25px;
}
#two{
    margin-left: 30px;
}
</style>

<h3> Hello {{$name}}, </h3>
<img src="https://cdn.pixabay.com/photo/2017/09/09/12/09/india-2731817__340.jpg" alt="Loading">
<p id="one"> 
    You Have Recently Booked for {{$count}} Guests from Silchar on {{$date}} of <b>{{$resname}}</b>
    <br>
   <p id="two"> Your userID is <b>{{$username}}</b> and Password is <b>{{$pass}}</b>. Make Sure to bring
        the screenshot of the reciept
  </p> 
</p>
<p> 
   {{$data}}
</p>
<br>

