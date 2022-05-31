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
elseif (isset($_REQUEST['Municipality']) ===true){
    session_destroy();
    header("Location: Municipality.php?Municipality");
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
        <title>Marinduque Mandin </title>
      
        <link href="css/style.css" rel="stylesheet" />
    </head>

<div class="header">
   <a> <img src="images/morion1.jpg" height="40" width="150" alt=""></a>
<div class="header-right">

<a class="active" href="index.php">Home</a>
<a href="?Municipality">Municipality</a>
<a href="?Start">Start Here</a>
<a href="?About">About Us</a>
<a href="?Contact">Contact Us</a>

</div>
</div>


        <style>
            body {
                background-image: url("images/marinduque_map.jpg");
                background-size: 1230px 670px;
            }
        </style>


<div class="dmessage">
    <img src="images/logo2.png" alt="">
</div>



<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

<div class="contents">

<?php 

echo "<p>Marinduque is an island province in the Philippines located in Southwestern Tagalog Region or Mimaropa, formerly designated as Region IV-B. Its capital is the municipality of Boac. Marinduque lies between Tayabas Bay to the north and Sibuyan Sea to the south. It is west of the Bondoc Peninsula of Quezon province; east of Mindoro Island; and north of the island province of Romblon. Municipality of Buenavista (Tagalog: Bayan ng Buenavista), is a 4th class municipality in the province of Marinduque, Philippines. The town was named Buenavista by Don Cornelio Sadiua, due to its good view. Its former name was Sabang, which is the river that runs through it. The majority of Buenavistans trace their ancestry to the Don Cornelio Sadiua family.</p>";

echo "<p> The province of Marinduque was ranked number 1 by the Philippine National Police and Philippine Security Forces as the 2013 Most Peaceful Province of the country due to its low crime rate statistics alternately ranking with the province of Batanes yearly. Furthermore, for almost 200 years, the province is home to one of the oldest religious festivals of the country, the Moriones celebrated annually every Holy Week. Marinduque comprises 6 municipalities, further subdivided into 218 barangays. A double legislative districts encompasses all townsSome parts of the Verde Island Passage, the center of the center of world's marine biodiversity and a protected marine area, are also within Marinduque's provincial waters.</p>";
?>

</div>


<div class="foot1">

  <p>Copyright &copy; 2022.</p>

        <a href="#"><img src="images/icons/facebook.png"></a>
        <a href="#"><img src="images/icons/twitter.png"></a>
        <a href="#"><img src="images/icons/youtube.png"></a>
        
</div>
</div>
</html>