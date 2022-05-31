<?php
//start the session
SESSION_START();


if (isset($_REQUEST['About']) ===true){
    session_destroy();
    header("Location: about us.php?About");
    }
elseif (isset($_REQUEST['Contact']) ===true){
    session_destroy();
    header("Location: contact.php?Contact");
}
elseif (isset($_REQUEST['Homepage']) ===true){
    session_destroy();
    header("Location: index.php?Homepage");
}elseif (isset($_REQUEST['Start']) ===true){
    session_destroy();
    header("Location: start here.php?Start");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Mogpog</title>
      
        <link href="css/style.css" rel="stylesheet" />
    </head>

<div class="header">
   <a> <img src="images/morion1.jpg" height="40" width="150" alt=""></a>
<div class="header-right">

<a href="?Homepage">Home</a>
<a class="active" href="Municipality.php">Municipality</a>
<a href="?Start">Start Here</a>
<a href="?About">About Us</a>
<a href="?Contact">Contact Us</a>

</div>
</div>
<br>
<br>

    <h4>Mogpog</h4>

<div class="cout">
    <img src="images/Mogpog1.png">
    


    <?php

echo "<p>Mogpog has a beautiful place where people can go and explore. Ulong Bay Beach Resort is one of the beaches that can be found in Mogpog. It is ideal for swimming with its fine sand and beautiful sunset. This resort can also host different functions and events. Overnight stays are possible with their simple fans and air-conditioned rooms. Also, the Luzon Datum is one of the most famous tourist spots in Mogpog..</p>";

echo "<p> It has a piece of stone marker which is located on top of a hill that locals call Mataas na Bundok or Mt. Mataas in Barangay Hinanggayon, town of Mogpog. It is the primary geodetic reference or origin of all geological surveys in the Philippines, which means all maps and surveys made in the country use the Luzon Datum as a reference point..</p>";
    
    ?>



</ol>
</div>

</div>
<div class="foot">

  <p>Copyright &copy; 2022.</p>

        <a href="#"><img src="images/icons/facebook.png"></a>
        <a href="#"><img src="images/icons/twitter.png"></a>
        <a href="#"><img src="images/icons/youtube.png"></a>
        
</div>
</div>
</html>