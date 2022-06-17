<link rel="stylesheet" href="{{asset('asset\css\bookHomePage.css')}}">
<title>Book</title>
<?php
//  The links , names and font awesome are stored in arrays
function display_items($i,$to)
    {

        $Font_awesome = array( 
            "fa-plane fa-2x","fa-train fa-2x" , "fa-bus fa-2x", "fa-cab fa-2x", "fa-hotel fa-2x",
            "fa-utensils fa-2x","fa-school fa-2x" , "fa-university fa-2x", "fa-clinic-medical fa-2x", "fa-shopping-basket fa-2x"
        );
        $Font_headings = array("Flight","Train","Bus","Cabs", "Hotels","Eatery","Schools","Colleges","Hospital","Shopping");
        $Link_array = array("/ ",  " /",  "/trial",  "/ ",  "/ ",  "'/restraunt'", " '/school_booking' ",  "/college_booking ",   "/bookDoctor ", "/ ");

        echo '<div class="links">';
            while($i < $to){
                if($i == count($Font_awesome)){
                    break;
                }
            echo '<div id="div_items" >';
            echo '<i id="font_awesome_items" class="fa '.$Font_awesome[$i].'"></i><br/>';
            echo '<a class="fontHeadings" href = '.$Link_array[$i].'">'.$Font_headings[$i].'</a><br/>';
            echo '</div>';
            $i++;
        }
        echo '</div>';
    }
?>

<nav>
  <x-navBar/>
  <center>
    <h1 class="Heading_book_page"> WELCOME TO SILCHAR </h1>
    <hr>
  </center>
</nav>

<body>

<section id="links_section">
<h2 class="options_caption">Have you not found the right one? <br> Find a service suitable for you here. </h2>
    <?php  $i = 0;  display_items($i, $i+5); ?>
    <br>
    <?php  $i = 5;  display_items($i , $i+5); ?>
</section>
<br>
<hr id="body_hr" >

<section class="cards_section" >
<h1 class="card_heading"> Find Your Destination  </h2> 

<div class="links">
<x-card_bs 
    image="{{asset('asset\img\khaspur-kachari-king.jpg')}}" 
    heading="KHASPUR"
/> 
<x-card_bs 
    image="{{asset('asset\img\park.jpg')}}" 
    heading="GREEN PARK"
/> 
<x-card_bs 
    image="{{asset('asset\img\amusement.jpg')}}" 
    heading="WATER PARK"
/>  
</div>


<div class="links">
<x-card_bs 
    image="{{asset('asset\img\dolu.jpg')}}" 
    heading="DOLU"
/> 
<x-card_bs 
    image="{{asset('asset\img\GandhiBagh.jpg')}}" 
    heading="GANDHI BAGH"
/> 
<x-card_bs 
    image="{{asset('asset\img\biopark.jpg')}}" 
    heading="BIODIVERSITY PARK"
/>  
</div>


<div class="links">
<x-card_bs 
    image="{{asset('asset\img\mani.jpg')}}" 
    heading="MANIHIRAN TUNNEL"
/> 
<x-card_bs 
    image="{{asset('asset\img\bhuvan.jpg')}}" 
    heading="BHUVAN HILL"
/> 
<x-card_bs 
    image="{{asset('asset\img\malls.jpg')}}" 
    heading="GOLDIGHI MALL"
/>  
</div>
</section>
</body>

<x-footer />
<script src="https://kit.fontawesome.com/98be8a5830.js" crossorigin="anonymous"></script>
