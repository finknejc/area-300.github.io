<!DOCTYPE html>
<html lang="en">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<head>

 
<meta charset="utf-8">
<meta name="description" content="">
<meta name="author" content="">

<link rel="stylesheet" href="style.css">
    
<title></title>
       
  
  </head>
 
<body 
    style="background-image: url(images/shapes.png);
           background-size:50%;background-repeat: repeat;
           background-color:#000;"
      >
    
    
    
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
    
    <div style="opacity:0;" class="sideleft-info">
      empty <!-- opacity 0 -->
    </div>
    
    <div style="opacity:0;" class="sideright-info">
        empty <!-- opacity 0 -->
    </div>
    
   
    
    
    <section class="blogPosts">
        <img class="blogPostImg" src="images/aerialSchool2.jpg">
            <h2 style="top:650px;font-size: 32px;line-height: 38px; width:30%;">Aerial perspective & <br/>it’s issues</h2>
            
            <p class="dateOnBlogs" style="float:left;top: -25px;">11/11/2018</p>
            <p class="dateOnBlogs" style="text-align:right; float:right;top: -25px;">
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


    mysqli_query($conn,"UPDATE statisticstwo SET value=value+1 WHERE name='hits' LIMIT 1");

    $result = mysqli_query($conn,"SELECT * FROM statisticstwo WHERE name='hits' LIMIT 1");
    while($row = mysqli_fetch_array($result)) 
    {
        echo "Views:".$row['value'];
    }
?>
        </p>
        
        <p class="blogPostText">
            Are you one of the thousands of Iphone owners who has no idea that they can get free games for their Iphone? It’s pretty cool to download things from Itunes, but with a little research you can find thousands of other places to download from -check out our tips below to help you find out where.<br/><br/>

The Iphone is staggeringly popular, although it hasn’t really come as much of a surprise – you only have to consider the Ipod as proof of Apple’s dominance with such gadgets. If you are lucky enough to be one of the early Iphone owners, check out these resources to help you get some free Iphone games.<br/><br/>

1-It’s one of the most obvious ways to find anything these days, but a simple google search can yield excellent results when you are looking for places to get your downloads. The downside of this is that after a little while you begin to realise that many of these sites have a few things in common. The trouble is that the sites that make themselves the most accessible in this way are the ones that are simply looking to make money with their advertising. They get paid for you to click on their ads, so it’s in their interest to drag as many visitors as possible into their site, and for this reason you’ll find that many of them offer no real downloads at all.<br/><br/>

2-There is a slight variation on the sites above, in that they will offer a couple of Iphone downloads, whether they be games or movies or wallpapers or whatever, but they will be very old and dated, and in many cases once you complete the download you’ll find it doesn’t work anyway. The point of this is, you guessed it, just to attract visitors who may then click on the advertising and make some money. Not exactly a noble business model, but I guess it works as there seem to be enough sites like that around!
        </p>
        
        <h3>If you really love this, show us some love — </h3>
        
   

                    <img class="socials" src="images/Snapchat_White.png">
                    
    <a href="https://www.instagram.com/areathreehundred/"><img class="socials" src="images/Instagram_White.png"></a>
                    
    <a href="https://www.facebook.com/AREA-300-241937652998516/?fref=ts">
        <img class="socials" src="images/Facebook_White.png">
                        </a>
   
<section class="copyright" style="opacity:0;">
    Created by Lovehandlers 2017
</section>
    

       
    </section>
    <div class="buttonWrap">
    <a href="blog.php"><button class="backToArticle">
       < back to article
    </button>
    </div>
        </a>
    

    

            
            
            
            
            
            
            



        
   <script type="text/javascript">
  <!--
  if (screen.width <= 1200) {
    window.location = "http://www.area300.dk/mobile/blog.html";
  }
  //-->
</script>         
        
        
        
        
        <script src="jquery-3.1.1.js"></script>
        <script src="animation.js"></script>
</body>


</html>