<!DOCTYPE html>

<html lang="en">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<head>

 
<meta charset="utf-8">
<meta name="description" content="">
<meta name="author" content="">

<link rel="stylesheet" href="style.css">
    
<title></title>
 <style>
     body{
         background-image: url(images/backgroundblog.jpg);
         background-color: #151515;
     }    
</style>      
  
  </head>
 
<body>
    
    
    
    <section class="navigation">
        <nav>
            <ul>
                <a href="index.html"><span class="logo"><img src="images/Logo.svg"></span></a>
                <li><a href="subscribe.html" class="tag"><span>.sbscrb</span><span class="borderslide"></span></a></li>
                
                
                
                <li><a href="about.html" class="tag"><span>.abt</span><span class="borderslide"></span><p class="comingOn">Coming soon</p></a></li>
                
                <li><a href="blog.php" class="active"><span>.blg</span><span class="borderslide"></span></a></li>
                
                <li><a href="podcast.html" class="tag"><span>.pdcst</span><span class="borderslide"></span></a>
                    </li>
                
                <li><a href="" class="inactive"><span>.prgrm</span><span class="borderslide"></span><p class="comingOn">7th November</p></a></li>
                
                <li><a href="index.html" class="tag"><span>.evnt</span><span class="borderslide"></span></a></li>
               
            </ul>
        </nav>
    </section>
    
    <div class="sideleft-info">
        04 AREA 300 - the blog   
    </div>
    
    <div style="opacity:0;" class="sideright-info">
        empty <!-- opacity 0 -->
    </div>
    
    <section class="BlogCenter">
        
        <h1>Blog</h1>
        <h6>join our private email list</h6>
        <p style="width: 870px; padding:50px; border-bottom:0.5px solid rgba(255,255,255,0.5);">
            Join our super honest private list where we’ll share with you unshared, uncover covered, untaboo tabooed. We’ll try to send you something every week but you know. It’s like with new year’s resolutions, they never persevere… or do they?   </p>
        
       
        <!-- Begin MailChimp Signup Form -->
<div id="mc_embed_signup">
<form action="//facebook.us16.list-manage.com/subscribe/post?u=81aac30737d4dea4410418f81&amp;id=2d76bcf074" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	
<div class="indicates-required"><span class="asterisk"></span></div>
<div class="mc-field-group">
	<label for="mce-EMAIL"><span class="asterisk"></span>
</label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email Adress">
</div>
<div class="mc-field-group">
	<label for="mce-FNAME"></label>
	<input type="text" value="" name="FNAME" class="" id="mce-FNAME" placeholder="First Name">
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_81aac30737d4dea4410418f81_2d76bcf074" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>
           <!-- End of MailChimp Signup Form -->
        <p class="sidenote">no spam.ever.</p>
        
    </section>
    
    
    <section id="blogs" class="blogs">
        <section class="blogsLeft">
            <a style="text-decoration: none;" href="blogPost1.php"><img style="margin-bottom:75px;" class="blogImg" src="images/aerialSchool1.jpg">
            <h2 class="ImgOnText">Aerial perspective &<br/> it’s issues</h2>
            <p class="dateOnBlogs" style=" float:left;">28/09/2017</p>
            <p class="dateOnBlogs" style="text-align:right; float:right;">
            <?php
// ENDORA SERVER
$servername = "mysql74.unoeuro.com";
$username = "area300_dk";
$password = "ProjectRufus300";   

                   



// LOCAL SERVER SETTING
//$servername = "localhost";
//$username = "root";
//$password = "root";   
    
 
                   
//ENDORA SERVER
$dbname = "area300_dk_db";

// LOCAL SERVER SETTING


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
$conn -> set_charset("UTF8");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";   //outcomment when working


    mysqli_query;

    $result = mysqli_query($conn,"SELECT * FROM statisticstwo WHERE name='hits' LIMIT 1");
    while($row = mysqli_fetch_array($result)) 
    {
        echo "Views:".$row['value'];
    }
?>
                </p>
                </a>
            <!--
            <a><img style="margin-bottom:75px;" class="blogImg" src="images/aerialSchool1.jpg">
            <h2 class="ImgOnText">Aerial perspective &<br/> it’s issues</h2>
            <p class="dateOnBlogs" style=" float:left;">11/11/2018</p>
            <p class="dateOnBlogs" style="text-align:right; float:right;"> Views</p>
                </a>
            -->
        </section>
        
        <section class="blogsRight">
            <a>
            <img class="blogImg" style="margin-top: 175px;" src="images/peopleIn300.jpg">
            <h2 class="ImgOnText" style="top: -225px;">new era in educating<br/> young people</h2>
            <p class="dateOnBlogs" style=" float:left;top: -200px;">08/11/2017</p>
            <p class="dateOnBlogs" style="text-align:right; float:right; top: -200px;"></p>
            </a>
            <!--    
            <a><img class="blogImg" src="images/peopleIn300.jpg">
            <h2 class="ImgOnText" style="top: -225px;">Aerial perspective &<br/> it’s issues</h2>
            <p class="dateOnBlogs" style=" float:left;top: -200px;">08/11/2018</p>
            <p class="dateOnBlogs" style="text-align:right; float:right; top: -200px;">Views</p>
            </a>
            -->
        </section>
    </section>
    
   
<section class="copyright" style="opacity:0;">
    Created by Lovehandlers 2017
</section>
    
    
    
<section class="social">

                    <img class="socials" src="images/Snapchat_White.png">
                    
    <a href="https://www.instagram.com/areathreehundred/"><img class="socials" src="images/Instagram_White.png"></a>
                    
    <a href="https://www.facebook.com/AREA-300-241937652998516/?fref=ts">
        <img class="socials" src="images/Facebook_White.png">
                        </a>
   
</section>
            
            
            
            
            
            
            



        
  <script type="text/javascript">
  <!--
  if (screen.width <= 1200) {
    window.location = "http://www.area300.dk/mobile/blog.html";
  }
  //-->
</script>          
        
        
        
        
        <script src="jquery-3.1.1.js"></script>
        <script src="animation.js"></script>
    <script>
     var clicks = 0;
    function clickME() {
        clicks += 1;
        document.getElementById("clicks").innerHTML = clicks;
 }
    </script>
</body>


</html>