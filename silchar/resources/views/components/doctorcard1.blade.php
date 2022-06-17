<style>


.bg{
    background-color: rgb(4, 4, 85);
    color: white;
    width: 10cm;
    height: 4cm;
}
.bg:hover{
    background-color: rgb(8, 8, 116);
}
.dc1 {
    width: 10cm;
    text-align: justify;
    margin-left: 20px;
    border: solid 1px;
    padding: 20px;
}

.fa-user-nurse:before {
    margin-left: 4.5cm;
}
.fa-user-tie:before {
    margin-left: 4.5cm;
}
.fa-ambulance:before {
    margin-left: 4.5cm;
}

.dc1 h2{
    text-align: center;
}
.dc1 p {
    text-align: justify;
    margin-top: 8px;
}
</style>

<div class="dc1 bg"  >
    <i class="{{$fa}}" id="font_awesome_doctorcard1"></i>
    <h2> {{$heading}} </h2>
    <p> {{$paragraph}} </p>
</div>
