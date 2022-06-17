
<style>
.footer_footer {
    background-color: rgb(3, 9, 66);
    display: flex;
    margin-top: 20px;
    height: 4cm;
    padding-top: 14px;
}

div .one_footer{
    display: flex;
    width: 55%;
}
.one .Heading_footer{
    width: 40%;
}
section.Heading_footer {
    margin-top: 27px;
}
.Heading_footer h1 a {
    margin-left: 36px;
    text-decoration: none;
    font-family: sans-serif;
    border-right: solid white 1px;
    padding-right: 102px;
    color: whitesmoke;
}
.Heading_footer a:hover{
    color: rgb(217, 219, 255);
}
.detailingLinks_footer{
      display: flex;
      padding-left: 50px;
      margin-top: 19px;
}
.detailingLinks_footer  a.links {
    padding-left: 50px;
    color: rgba(255, 255, 255, 0.856);
    text-decoration: none;
    font-size: medium;
}
.detailingLinks_footer  a.links:hover{
    color: rgba(252, 241, 92, 0.753);
}
/* h2 {
    margin-top: -30px;
    margin-left: -5px;
    color: antiquewhite;
    text-decoration:none;
} */

.two{
    display: flex;
    padding-left: 40px;
}
.two i{
    margin-left: 60px;
    margin-top: 35px;
    color: white;
    font-size: 30px;
}

#facebook_fontAwesome {
    color: white;
}
#facebook_fontAwesome:hover{
    color: #9cbfff;;
}

#twitter_fontAwesome {
    color: #79d5ff;
}
#twitter_fontAwesome:hover{
    color: white;
}

#linkedIn_fontAwesome {
    color: #4780ff;
}
#linkedIn_fontAwesome:hover{
    color: white;
}


#instagram_fontAwesome {
    color: #ff3e60;
}
#instagram_fontAwesome:hover{
    color: white;
}


#quora_fontawesome {
    color: #c52626;
}
#quora_fontawesome:hover {
    color: white;
}
.copyright {
    text-align: center;
    color: black;
    font-family: revert;
    margin-top: 9px;
    font-size: 19px;
    margin-bottom: 10px;
}

</style>

<div class="footer_footer"> 
    <div class="one_footer">
    <!-- heading -->
    <section class="Heading_footer">  <h1><a href="#bar_to_scrollup">SILCHAR</a></h1>  </section>

    <!-- details -->
    <section class="detailingLinks_footer">
          <div class="detailsDivision_flex_footer">
              <a href="" class="links">About Us</a> <br> <br>
              <a href="/book" class="links">Book</a>
          </div>
          <div class="detailsDivision_flex2_footer">
            <a href="/writeBlog_Home" class="links"> Write Blogs</a> <br> <br>
            <a href="" class="links"> Travel Guide</a>
          </div>
    </section>
    </div>

    <div class="two">
    <a href="https://www.facebook.com/groups/228833144629841"> <i id="facebook_fontAwesome" class="fab fa-facebook-square"></i> </a> 
    <a href="/"><i class="fab fa-twitter" id="twitter_fontAwesome" ></i></a>
    <a href="https://www.linkedin.com/in/tirtha-jyoti-bol-6422591b7/"><i id="linkedIn_fontAwesome" class="fab fa-linkedin"></i></a>
    <a href="/"><i  id="instagram_fontAwesome"  class="fab fa-instagram"></i></a>
    <a href="https://www.quora.com/What-advice-would-you-give-to-someone-who-is-moving-to-Silchar-Assam-India"><i  id="quora_fontawesome" class="fab fa-quora"></i></a>
    </div>
</div>
<div class="copyright">
    <?php 
            echo "© copyright - Tirtha Jyoti Bol   " . date("Y") ;
    ?>
</div>
<script src="https://kit.fontawesome.com/98be8a5830.js" crossorigin="anonymous"></script>
