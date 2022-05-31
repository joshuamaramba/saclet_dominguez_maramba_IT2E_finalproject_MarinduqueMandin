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
        <title>Stacruz</title>
      
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

    <h4>Stacruz</h4>

<div class="cout">
    <img src="images/stacruzbayan.png">

    


    <?php

echo "<p>Santa Cruz is a 1st class coastal municipality of Marinduque Province in Region IV-B or MiMaRoPa Region, Philippines.It is Located in Northeastern part of Marinduque Island, the neighbouring Towns is Torrijos (south), Boac and Mogpog (west)has Area 270.77 km2 (104.54 sq. mi) with population of  56,408 .The place is a coastal plain with mountains and rolling hills, as for industries they are engaged in Agriculture, Trading, and Tourism. Their major products are Rice, Fish, Coconut, Vegetables, and Poultry. Sta. Cruz has the Ati-atihan festival and their place is known for popular tourist spot Maniwaya Island. 

.</p>";



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