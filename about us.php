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
elseif (isset($_REQUEST['Start']) ===true){
    session_destroy();
    header("Location: start here.php?Start");
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
        <title>About Us</title>
      
        <link href="css/style.css" rel="stylesheet" />
    </head>

<div class="header">
   <a> <img src="images/morion1.jpg" height="40" width="150" alt=""></a>
<div class="header-right">

<a href="?Homepage">Home</a>
<a href="?Municipality">Municipality</a>
<a href="?Start">Start Here</a>
<a class="active" href="about us.php">About Us</a>
<a href="?Contact">Contact Us</a>

</div>
</div>

<h1>About</h1>
<h3>Welcome to Marinduque Mandin'n</h3>

<div class="content">

<br>

<?php

echo "<p>Our group was from BSI/T-2E. And we created this website named Marinduque Mandin.</p><br>";

echo "<p>Marinduque Mandin's website can be accessed by everyone. Everyone can feel like they are exploring and experiencing Marinduque through the Internet. People may use it to gain knowledge about Marinduque's traditions, culture, cuisine, and most beautiful places where they can go. That's why our group created this group to represent our beloved province, Marinduque.</p><br>";

echo "<p>It's time to go to Marinduque! Parini na baya!</p>";

?>

</div>

        <div class="banner">
                <img src="images/morion logo.png">
            </div>

    

<div class="foot">

  <p>Copyright &copy; 2022.</p>

        <a href="#"><img src="images/icons/facebook.png"></a>
        <a href="#"><img src="images/icons/twitter.png"></a>
        <a href="#"><img src="images/icons/youtube.png"></a>
        
</div>
</div>
</html>