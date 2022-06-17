<style>
    #ul{
        list-style-type:disc;
    }
    #img{
        height: 2cm;
        width: 3cm;
        margin-left: 20px;
        margin-top: 12px;
    }
</style>

<div class="restraunt_component2" >

    <div class="details">
        <p>{{$email}}</p>
        <p>{{$phone}}</p>
        <ul id="ul">
            <li>{{$dishname}} <div id="image"><img id="img" src="{{$image}}" alt="Loading"></div> </li>    
        </ul>
    </div>
</div>
