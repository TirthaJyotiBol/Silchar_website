<style>
    ul{
        list-style-type:disc;
    }
    img{
        height: 2cm;
        width: 2cm;
        margin-left: 20px;
    }
    .trial{
        display: flex;
    }
</style>

<div class="trial">
    <div class="restraunt_component1">
        <x-restrauntbook/>
    </div>

<div class="restraunt_component2" >
    <h1>Restraunt Name</h1>

    <div class="details">
        <p>Email</p>
        <p>Phone Number</p>
        <ul>
            @for($i=0;$i<50;$i++)
            <li>Dish Items <div id="image"><img src="https://cdn.pixabay.com/photo/2021/04/12/04/22/woman-6171281__340.jpg" alt=""></div> </li>
            @endfor
        </ul>
    </div>
</div>


</div>