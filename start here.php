<?php
//start the session
SESSION_START();


if (isset($_REQUEST['Homepage']) ===true){
    session_destroy();
    header("Location: index.php?Homepage");
    }
elseif (isset($_REQUEST['Municipality']) ===true){
    session_destroy();
    header("Location: Municipality.php?Municipality");
}
elseif (isset($_REQUEST['About']) ===true){
    session_destroy();
    header("Location: about us.php?About");
}elseif (isset($_REQUEST['Contact']) ===true){
    session_destroy();
    header("Location: contact.php?Contact");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Start Here</title>
      
        <link href="css/style.css" rel="stylesheet" />
    </head>

<div class="header">
   <a> <img src="images/morion1.jpg" height="40" width="150" alt=""></a>
<div class="header-right">

<a href="?Homepage">Home</a>
<a href="?Municipality">Municipality</a>
<a class="active" href="start here.php">Start Here</a>
<a href="?About">About Us</a>
<a href="?Contact">Contact Us</a>

</div>
</div>
    <div class="vegetb">
        <img src="images/Hamos baya dine.png">
    </div>


<div class="contented">
<div class="c3">
    <h3>Get Started Here with Marinduque Mandin</h3>
</div>

<br>

<?php 


echo "<p>Greetings, Welcome to MARINDUQUE MANDIN, Thank you for visiting!If you are a type of person who loves to travel then stay, this website is for you.</p><br>";

echo "<p>There are many reasons to visit Marinduque, a heart-shaped island province in the Philippines found in the country’s south western Tagalog Region of MIMAROPA. Marinduque’s is best known for its annual Moriones Festival that takes place during the Holy Week. It’s one of the oldest festivals in the Philippines where locals don colourful masks and costumes to re-enact the story of the Roman soldier, Longinus.</p><br>";

echo "<p>Other than during the Moriones Festival, travellers can visit Marinduque all year round for its uncrowded white-sand beaches, gorgeous landscapes, scenic tours, historical landmarks, and of course, its cuisine. Marinduque’s unique cuisine and its native delicacies are one of the reasons why you should visit the province.</p><br>";

echo "<p>So, what are you waiting for? Please add Marinduque in your bucket list now and start to browse around, thank you!</p><br>";

?>

</div>

<ol class="recipe">
  <li><a>Boac</a></li>
  <li><a>Mogpog</a></li>
  <li><a>Torrijos</a></li>
  <li><a>Stacruz</a></li>
  <li><a>Buenavista</a></li>
  <li><a>Gasan</a></li>

</ol>

<div class="foot1">

  <p>Copyright &copy; 2022. </p>

        <a href="#"><img src="images/icons/facebook.png"></a>
        <a href="#"><img src="images/icons/twitter.png"></a>
        <a href="#"><img src="images/icons/youtube.png"></a>
        
</div>
</div>
</html>