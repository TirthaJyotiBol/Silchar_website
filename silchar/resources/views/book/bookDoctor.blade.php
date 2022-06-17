{{-- single page but elements are given scroll to the page --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('asset\css\bookDoctor.css')}}">
    <link rel="shortcut icon" href="{{asset('asset/img/favicon.png')}}" type="image/x-icon">
    <title>Doctor</title>
</head>



<body>

    <nav id="navbar_doctor_homepage" >

        <div class="logo">
         <a href="/"> 
             <h1> SILCHAR MEDICAL </h1>
            </a> 
        </div>

        <div class="navItems_flex_doctor">
            <div class="navItems_doctor"><a href="/"> HOME  </a></div>
            <div class="navItems_doctor"><a href=""> ABOUT  </a></div>
            <div class="navItems_doctor"><a href="#my_doctors"> OUR DOCTORS  </a></div>
            <div class="navItems_doctor"><a href="#bookdoctors"> BOOK APPOINTMENT  </a></div>
        </div>

    </nav>


    <section id="doctor_carasol_homepage">
        <div class="dr_writings">
            <h2>  We Provide Best <br> Medical Services  </h2>
            <br>
            <p>
                A doctor, like anyone else who has to deal with human beings, each of them unique,
                cannot be a scientist; he is either,like the surgeon, a craftsman, or, like the physician
                and the psychologist, an artist
            </p>
            <br>
            <a href="#bookdoctors"> <button> >>> BOOK AN APPOINTMENT</button> </a>
        </div>
        <img id="doctor-top-image" src="{{asset('asset\img\doctor_image_page2.png')}}" alt="doctor">
    </section>

    <section id="doctor-card-one" >

        <x-doctorcard1 heading="24 Hours Service" 
        paragraph="Public 24/7 services often include those
         provided by emergency medical providers, police,
         fire and emergency telephone numbers, such as 9-1-1 in North America." 
         fa="fas fa-user-nurse fa-3x" 
        />

        <x-doctorcard1 heading="Professional Staff" 
        paragraph="The staffs provided by the Hospitals of silchar are well trained
        and prepared to do their work and can perform their duty in a professional manner"
        fa="fas fa-user-tie fa-3x" 
        />

        <x-doctorcard1 heading="Emergency Care" 
        paragraph="Public 24/7 services often include those
         provided by emergency medical providers, police,
         fire and emergency telephone numbers, such as 9-1-1 in North America." 
         fa="fas fa-ambulance fa-3x" 
        />
        
    </section>
    <br>
    <br>

    <div class="services">
         <center> <h1 id="services_heading_centered" > SERVICES WE PROVIDE</h1> </center>

    <div class="showServices" >
        <x-drcardtwo heading="Neurology" fontAwesome="fas fa-stethoscope fa-3x" />
        <x-drcardtwo heading="Eye Care" fontAwesome="fas fa-eye fa-3x" />
        <x-drcardtwo heading="Dental Care" fontAwesome="fas fa-tooth fa-3x" />
    </div>

    <div class="showServices">
        <x-drcardtwo heading="Pulomonary" fontAwesome="fas fa-lungs fa-3x" />
        <x-drcardtwo heading="Cardiology" fontAwesome="fas fa-heartbeat fa-3x" />
        <x-drcardtwo heading="Hepatology" fontAwesome="fas fa-syringe fa-3x" />
    </div>


    <div class="showServices">
        <x-drcardtwo heading="obstetrician " fontAwesome="fas fa-baby fa-3x" />
        <x-drcardtwo heading="Surgeon" fontAwesome="fas fa-user-md fa-3x" />
        <x-drcardtwo heading="Gastroenterologists" fontAwesome="fas fa-weight fa-3x" />
    </div>
    <br> <br>
    </div>

   <section id="my_doctors" class="doctor_slider">
    <center> <h1 id="services_heading_centered" > <b> OUR  DOCTORS </b> </h1> </center>

    <div class="sliderDivision">


        <div class="slider">
            <div class="silde-track">
    
                   {{-- <div class="slide"> --}}
                    @foreach($datas as $d)

                    <div class="doctorCard">
                        <img src="{{asset('uploaddoctorimages/'.$d['picture'])}}" alt="sfs">
                      <center> <hr> </center>  
                        <h1 id="doctorCardName"> {{$d->name}}</h1>
                        <b><p id="doctorCardExperiance">Experiance :</b> {{$d->experiance}} Years</p>
                        <b><p id="doctorCardSpecialist">Specialist :</b> {{$d->specialist}}</p>
                        <b><p id="doctorCardAddress">Address :</b> {{$d->address}} </p>
                        <a id="bookAppointment" href="#bookdoctors"> <button type="submit" > BOOK APPOINTMENT  </button> </a>
                        <br>
                    </div>

                    @endforeach
                   {{-- </div>          --}}
    
            </div>
        </div>
    </div>
 

        <hr>
   </section>
    </div>

    <div id="bookdoctors"  class="doctorBookAppointment">
        <center> <h1> Book Appointment </h1> </center>
        <form class="doctorBookingForm" action="" method="post">

            <label id="doctorNameLabel" class="book-item" for="doctorNameInputs">Name</label> <br>
            <input type="text" name="name" id="doctorNameInput" placeholder="Enter Your Name" > <br>

            <label for="doctorMailInput" id="doctorMailLabel" class="book-item" >Email</label> <br>
            <input type="mail" id="doctorMailInput" name="mail" placeholder="Enter Your mail"  > <br>

            <label for="doctorPhoneInput" id="doctorPhoneLabel" class="book-item" >Phone</label> <br>
            <input type="phone" id="doctorPhoneInput" name="phone" placeholder="Enter Your Phone Number"  > <br>

            {{-- if value == this then select * from table where specialization == this --}}

            <label for="doctorSelectInput" id="doctorSelectionLabel" >Specialist : </label>
            <select name="selections" id="doctorSelectInput" class="book-item" >
                <option value="Allergies">Allergies</option>
                <option value="Colds and Flu">Colds and Flu</option>
                <option value="Diarrhea">Diarrhea</option>
                <option value="Children Specialist">Children Specialist</option>
                <option value="Homeopathy">Homeopathy</option>
                <option value="others">others</option>
            </select>

            <br>


            <label for="doctorSelectNameLabel"> Doctor : </label>
            <select name="selection_doctor_name" id="selection_doctor_name" class="book-item" >
                <option value="Prithviraj kar">Prithviraj kar</option>
                <option value="Prithviraj kar">Prithviraj kar</option>
                <option value="Prithviraj kar">Prithviraj kar</option>
                <option value="Prithviraj kar">Prithviraj kar</option>
                <option value="Prithviraj kar">Prithviraj kar</option>

            </select>

            <br><br>

            <button type="submit" id="doctorBook" >Book</button>

        </form>
    </div>

<x-footer/>

</body>
</html>
<script src="https://kit.fontawesome.com/98be8a5830.js" crossorigin="anonymous"></script>

 