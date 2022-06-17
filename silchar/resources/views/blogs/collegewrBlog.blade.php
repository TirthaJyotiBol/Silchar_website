<title>write blog | college</title>
<x-blogForm heading="ABOUT COLLEGE" />

<form action="" method="post" enctype='multipart/form-data' >
@csrf
<label for="heading_form"> Heading </label>  
<input type="text" name="heading_form" id="heading_form" placeholder="Enter The Heading of the Blog" required> <br>
<br> <br>
<label id="description_label" for="descrption-form">Blog</label> <br>
<textarea class="description_textarea" name="description_form" id="description-form" cols="30" rows="10" required></textarea> 
<br> <br>
<label for="blog_pic"> Picture :  </label>
<input type="file" name="blog_pic" id="blog_pic" required/>
<label for="blogger" id="blogger" > Name :  </label>
<input type="text" name="name" id="name" placeholder="Enter Your Name"  required/>
<br> <br>
<button type="submit" id="buttonBlogSubmit" > POST </button>
</form>

<x-footer/>
<center> <p> <a class="footerHome" href="/">HOME</a></p> </center>