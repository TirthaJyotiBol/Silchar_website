<!DOCTYPE html>
<html lang="en">

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
crossorigin="anonymous">
<link rel="shortcut icon" href="{{asset('asset/img/favicon.png')}}" type="image/x-icon">
</head>
<title> Blogs </title>
<body> 
<x-navBar/> 
<div class="cardsAlignment1">
<x-readblogcards
    link="/History"
    image="{{asset('asset/img/history_cardBlog.webp')}}"
    heading="HISTORY"
/>
<x-readblogcards
    link="/city"
    image="{{asset('asset/img/city_blogCard.webp')}}"
    heading="CITY"
/>
<x-readblogcards
    link="/Hospitals"
    image="{{asset('asset/img/hospitals_blogCard.webp')}}"
    heading="HOSPITALS"
/>
</div>


<div class="cardsAlignment2">
<x-readblogcards
    link="/Schools"
    image="{{asset('asset/img/school_blogCard.webp')}}"
    heading="SCHOOLS"
/>
<x-readblogcards
    link="/Colleges"
    image="{{asset('asset/img/college_blogCard.webp')}}"
    heading="COLLEGES"
/>
</div>  
<br>
<x-footer/>
       
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
    crossorigin="anonymous"></script>

</body>
</html>


<!-- Read Blogs Front Page -->