<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
crossorigin="anonymous">

<style>

p.card-text {
    font-style: arial;
    color: white;
    text-align: center;
    text-decoration: none;
}

.card-body {
    flex: 1 1 auto;
    padding: 1rem 1rem;
    background-color: #000000de;
}

.cardx {
    margin-top: -4cm;
    margin-left: 3.5cm;
}

.cardx :hover{
    opacity: 95%;
}

.cardsAlignment1{
  display:flex;
}

.cardsAlignment2 {
    display: flex;
    margin-left: 6cm;
    margin-top: 5cm;
}
</style>

<body>
 <div class="cardx">
   <a id="card" href={{$link}}>
   <div class="card" style="width: 18rem;">
   <img src={{$image}} class="card-img-top" alt="loading">
   <div class="card-body">
    <p class="card-text"> {{$heading}} </p>
   </div>
   </div>
   </a>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
    crossorigin="anonymous"></script>

</body>
</html>