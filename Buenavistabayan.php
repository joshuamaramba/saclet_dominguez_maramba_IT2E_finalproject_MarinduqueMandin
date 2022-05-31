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
        <title>Buenavista</title>
      
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

    <h4>Buenavista</h4>

<div class="cout">
    <img src="images/buenavistabayan.png">

    


    <?php

echo "<p>The town was named Buenavista by Don Cornelio Sadiua, due to its good view. Its former name was Sabang, which is the river that runs through it. Buenavista is politically subdivided into 15 barangays. When it comes to food delicacies and crafts Buenavista is known for locally crafted products include Kalamay-hati, a type of coconut jam made from coconut cream and sugar or molasses. Maja blanca, a type of coconut pudding. Suman, a dessert/snack made of sticky rice and coconut steamed in leaves. Puto,a steamed rice cake. Bagoong,a  traditional fish paste made using fresh local/sustainable ingredients.</p>";

echo "<p>Buenavista is known for Santo Nino Festival, a four-day festival of food, fun and family-friendly activities and events. It is held annually in January. Flores de Mayo, celebration is held yearly from May 1 through May 31. It is in honor of the Blessed Virgin Mary. The children of Buenavista give gifts of bouquets and wreaths of native flowers to the Blessed Virgin.</p>";

echo "<p>As for Buenavista tourist spot, it’s known for Malbog Sulfur Spring. It is a natural hot spring at the foot of a volcano known as Mount Malindig. The stream directly comes from the mountain and goes down into a spring pool where tourists can have a rejuvenating dip.</p>";

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