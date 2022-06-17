<style>
    

.silder{
    height: 250px;
    margin: auto;
    position: relative;
    width: 100%;
    display: grid;
    place-items: center;
}

.silde-track{
    display: flex;
    margin-right: 20px;
    /* width: calc(250px*8); */
}

.slide{
    height: 200px;
    width: 250px;
    display: flex;
    align-items: center;
    padding: 15px;
}

.image_scroll_horizantal{
    width: 100%;
}

.sliderDivision {
    position: relative;
    overflow-y: hidden;
    margin-right: 30px;
    margin-left: 15px;
    height: 8.5cm;
}


img#drcardImage {
    height: 5cm;
    width: 7cm;
    margin-bottom: 13px;
}

h2.name {
    margin-left: 58px;
    font-family: emoji;
    text-transform: uppercase;
    margin-top: 4px;
}

b.experiance{
margin-left: 71px;
margin-top: 2px;
}

b.clinic {
    margin-left: 71px;
}

.card {
    margin-left: 30px;
    border: solid 0.1px;
    width: max-content;
    padding-bottom: 30px;
}

.slide .card button {
    margin-left: 23px;
    width: 80%;
    padding: 4px;
    cursor: pointer;
    text-transform: uppercase;
    margin-top: 6px;
    border: none;
    color: floralwhite;
    background-color: #01c001;
}

</style>

<div class="sliderDivision">


    <div class="slider">
        <div class="silde-track">

               <div class="slide">
                <div class="card">
                    

                    <img id="drcardImage" src="{{$image}}" alt="l">
                    <center> <hr width="60%" > </center>   
                    <h2 class="name"> {{$name}}</h2>
                    <b class="experiance" >Experiance : </b> {{$experiance}} 
                    <br>
                    <b class="clinic" >Specialist : </b> {{$specialist}}
                    <br>
                    <b class="clinic" >Clinic : </b> {{$address}}
                    <br>
                    <a href="bookDoctor#bookdoctors"> <button type="submit" > BOOK APPOINTMENT  </button> </a>

                </div>
               </div>         

        </div>
    </div>
</div>


{{--         <div class="slide">
                <img  class="image_scroll_horizantal" src="https://cdn.pixabay.com/photo/2014/08/27/19/29/selfie-429449_960_720.jpg" alt="lol">
            </div>
            <div class="slide">
                <img class="image_scroll_horizantal"  src="https://cdn.pixabay.com/photo/2014/08/27/19/29/selfie-429449_960_720.jpg" alt="lol">
            </div>
            <div class="slide">
                <img class="image_scroll_horizantal"  src="https://cdn.pixabay.com/photo/2014/08/27/19/29/selfie-429449_960_720.jpg" alt="lol">
            </div>
            <div class="slide">
                <img class="image_scroll_horizantal"  src="https://cdn.pixabay.com/photo/2014/08/27/19/29/selfie-429449_960_720.jpg" alt="lol">
            </div>
            <div class="slide">
                <img  class="image_scroll_horizantal" src="https://cdn.pixabay.com/photo/2014/08/27/19/29/selfie-429449_960_720.jpg" alt="lol">
            </div>
            <div class="slide">
                <img  class="image_scroll_horizantal" src="https://cdn.pixabay.com/photo/2014/08/27/19/29/selfie-429449_960_720.jpg" alt="lol">
            </div>
            <div class="slide">
                <img  class="image_scroll_horizantal" src="https://cdn.pixabay.com/photo/2014/08/27/19/29/selfie-429449_960_720.jpg" alt="lol">
            </div>
            <div class="slide">
                <img class="image_scroll_horizantal"  src="https://cdn.pixabay.com/photo/2014/08/27/19/29/selfie-429449_960_720.jpg" alt="lol">
            </div>
            <div class="slide">
                <img  class="image_scroll_horizantal" src="https://cdn.pixabay.com/photo/2014/08/27/19/29/selfie-429449_960_720.jpg" alt="lol">
            </div>  --}}