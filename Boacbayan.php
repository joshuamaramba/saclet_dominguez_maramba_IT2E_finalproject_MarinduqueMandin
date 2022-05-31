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
        <title>Boac</title>
      
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

    <h4>Boac</h4>

<div class="cout">
    <img src="images/Boac1.png">
    



<?php

echo "<p>It is a 1st class coastal municipality and the capital of Marinduque Province in Region IV-B or MiMaRoPa Region, Philippines. It is a provincial capital of Marinduque which is Located in Western Part of Marinduque. Neighbouring Towns are Mogpog (north), Torrijos (east), Gasan (south) with the area of 212.70 km2 (82.12 sq mi) and population worth of 54,730. It has 61 Barangays. Boac feature as Mountainous with narrow coastal plain. The Industries it engaged are Agriculture, Trading, and Tourism. Some of the Major Products are Rice, Vegetables, Poultry, Handicraft, and Home-made Food Items. Some of the major tourist spot of Boac are Laylay Beach, Aurora Beach, Kabugsakan Falls, Duyay Cave, Boac River, Mount Baliis, Marinduque Wildlife Sanctuary, Marinduque Provincial Capitol, and Immaculate Conception Cathedral.it has 2 festivals namely Moriones Festival and Feast of the Immaculate Conception. They know also for popular kakanin such as bibingka, puto, arrowroot cookies, suman and ulam called Kare-Kare.</p>";


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