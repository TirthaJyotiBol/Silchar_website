<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trial</title>
    <style>  

.card {
    margin-left : 1cm;
    height: 20pc;
    border: black 2px  solid;
    width: 15pc;
    background-color: rgb(93, 139, 139);
}
h1.head {
    padding-top: 15px;
    text-align: center;
    font-family: serif;
    color: white;
}
button {
    cursor: pointer;
    width: 96%;
    height: 40px;
    text-align: center;
    margin-left: 5px;
    margin-top: 2%;
    background: rgba(0, 0, 0, 0.801);
    border: none;
    color: wheat;
    text-align: -webkit-center;
    font-family: 'Times New Roman', Times, serif;
}
button:hover{
    background: rgb(0, 0, 0);
    color: rgb(245, 214, 156);
}
hr {
    width: 100%;
    margin-bottom: 18px;
    margin-top: 0.6cm;
}
h2.description {
    text-align: -webkit-center;
    font-size: medium;
    width: 95%;
    margin-top: 2px;
    color: antiquewhite;
}
img {
    height: 5.5pc;
    margin-left: 12%;
}

</style>
</head>
<body>
    <div class="card">
        <h1 class="head"> {{$name}} </h1>
        <p> <img src= {{$image}} alt="d"> </p>
        <a href = {{$link}} > <button> {{$button}} </button>  </a> 
        <hr>
        <h2 class="description"> {{$desc}} </h2>
    </div>
</body>
<script src="https://kit.fontawesome.com/98be8a5830.js" crossorigin="anonymous"></script>
</html>
