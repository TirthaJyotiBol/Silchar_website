<link rel="shortcut icon" href="{{asset('asset/img/favicon.png')}}" type="image/x-icon">
<style>

    .form_book_restraunt{
        background: rgba(216, 214, 214, 0.192);
        padding-left: 25px;
        padding: 40px;
        width: 60%;
        height: 15cm;
    }
    
        .input {
        height: 10px;
        padding: 10px;
        margin: 3px;
        width: 9cm;
    }
    select{
        height: 35px;
        margin: 3px;
        width: 9.6cm;
        background: rgba(0, 0, 0, 0.075);
        text-align: center
    }

    #submit_button{
        margin-top: 7px;
        width: 9.7cm;
        background: orangered;
        height: 30px;
        color: white;
        cursor: pointer;
        border: none;
        margin-left: 3px;
    }
    #submit_button:hover{
        cursor: pointer;
        color: white;
        background: rgba(255, 68, 0, 0.781);
    }
    #guestHeading{
        margin-bottom: 35px;
    }
    .head{
        text-decoration: none;
        color: black;
    }

    .head:hover{
        color: rgb(21, 21, 161);
    }
    .head > #guestHeading{
        text-decoration: none;
    }
    
    </style>
    
    <div class="form_book_restraunt">
    
       <a class="head" href="/restraunt"><h1 id="guestHeading" >Guest Details</h2></a> 
        <form action="/booking_restraunt_operation" method="post">
            @csrf
        <input class="input"  type="text" name="name" id="name" placeholder="Name" required>
        <input class="input"  type="text" name="phone" id="phone" placeholder="Phone Number" required>
            <br>
        <input  class="input" type="email" name="email" id="email" placeholder="Email" required>
        <input class="input"  type="text" name="person_count" id="person_count" placeholder="Guest Count" required>
        <br>
        <input class="input"  type="date" name="date" id="date" min="2022-01-01" max='2022-07-01' required>
        <select name="time" id="select_time">
            <option value="6">6:00PM</option>
            <option value="6:30">6:30PM</option>
            <option value="7">7:00PM</option>
            <option value="7:30">7:30PM</option>
            <option value="8">8:00PM</option>
            <option value="8:30">8:30PM</option>
            <option value="9">9:00PM</option>
            <option value="9:30">9:30PM</option>
            <option value="10">10:00PM</option>
            <option value="10:30">10:30PM</option>
            <option value="11">11:00PM</option>
            <option value="11:30">11:30PM</option>
            <option value="12">10:00PM</option>
            <option value="12:30">12:30PM</option>
            <option value="1">1:00AM</option>
            <option value="1:30">1:30AM</option>
        </select>
        <br>
        <input class="input" type="text" name="restraunt" id="name" value="{{$resname}}" readonly>
        <button id="submit_button" type="submit">Book Now</button>
    
         </form>
    
    </div>
    