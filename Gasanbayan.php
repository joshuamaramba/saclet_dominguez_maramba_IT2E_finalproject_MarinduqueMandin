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
        <title>Gasan</title>
      
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

    <h4>Gasan</h4>

<div class="cout">
    <img src="images/Gasan1.png">

    


    <?php

echo "<p>Officially the Municipality of Gasan is a 3rd class municipality in the province of Marinduque .The municipality is bounded by the provincial capital, Boac, to the north and east, by Buenavista to the southeast and by the  Sibuyan Sea to the south and west. It is the second-oldest municipality in Marinduque, after Boac. Residents of Gasan are called Gaseños.</p>";

echo "<p>The Tres Reyes Island off the coast of Marinduque is under the jurisdiction of Gasan, part of the municipality's Barangay Pinggan. Gasan is home to some of Marinduque's best-known tourist spots; Guingona Park, Reyes Park, Talao Cave, Tres Reyes Islands and many more.</p>";

echo "<p>Two main festivals celebrated in Gasan, two of which are unique to the municipality.           
-          Araw ng Gasan, the Araw ng Gasan commemorates the town's founding nearly 400 years        ago as a Spanish pueblo by Father Juan Rosado in honor of Saint Bernard of Marinduque.

-          Gasang-Gasang Festival, the Gasang-Gasang Festival celebrates the origins of the name "Gasan". Sponsored by the Gasan Culture and Arts Foundation (GASCUAF) with a certain contributions from 25 Barangays coming from their Barangay Budget, and held after the Moriones Festival, the festival features a live dance competition where several barangays have competed in the competition held in downtown Gasan.</p>";

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