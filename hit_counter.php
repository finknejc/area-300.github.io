<?php
// ENDORA SERVER
$servername = "thecheapdesigner.com.mysql";
$username = "thecheapdesigner_com";
$password = "YnFXYPcR";   

                   



// LOCAL SERVER SETTING
//$servername = "localhost";
//$username = "root";
//$password = "root";   
    
 
                   
//ENDORA SERVER
$dbname = "thecheapdesigner_com";

// LOCAL SERVER SETTING


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
$conn -> set_charset("UTF8");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";   //outcomment when working
   if ($conn) {
       printf("successsss");
   }

    mysqli_query($conn,"UPDATE statistics SET value=value+1 WHERE name='hits'");

    $result = mysqli_query($conn,"SELECT * FROM statistics WHERE name='hits'");
    while($row = mysqli_fetch_array($result)) 
    {
        echo "Views: ".$row['value'];
    }
?>
    <?php //remember to close the databaseconnection after use mysqli_close($conn); ?>

 