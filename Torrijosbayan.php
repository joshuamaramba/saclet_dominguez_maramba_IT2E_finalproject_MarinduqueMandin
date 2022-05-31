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
        <title>Torrijos</title>
      
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

    <h4>Torrijos</h4>

<div class="cout">
    <img src="images/Torrijos.png">

    


    <?php

echo "<p>It is 4th-class municipality in the province of  Marinduque, the municipality has a land area of 178.92 square kilometers or 69.08 square miles which constitutes 18.78% of Marinduque's total area. It was a vast plain noted for its rich natural beauties and abundant resources. It is also known for a long stretch of white-sand beach in Barangay Poctoy, it is considered the finest and most accessible white sand beach in mainland Marinduque. </p>";

echo "<p>One of their famous food souvenirs is  Arrowroot cookies and Bibingkang kanin. It also has a popular old church called St. Ignatius of Loyola Church that has become a tourist attraction because of its history. They also have a festival called Lechon Festival.</p>";

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