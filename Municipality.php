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
}elseif (isset($_REQUEST['Boac']) ===true){
    session_destroy();
    header("Location: Boacbayan.php?Boac");
}elseif (isset($_REQUEST['Mogpog']) ===true){
    session_destroy();
    header("Location: Mogpogbayan.php?Mogpog");
}elseif (isset($_REQUEST['Torrijos']) ===true){
    session_destroy();
    header("Location: torrijosbayan.php?Torrijos");
}elseif (isset($_REQUEST['Buenavista']) ===true){
    session_destroy();
    header("Location: Buenavistabayan.php?Buenavista");
}elseif (isset($_REQUEST['Gasan']) ===true){
    session_destroy();
    header("Location: Gasanbayan.php?Gasan");
}elseif (isset($_REQUEST['Stacruz']) ===true){
    session_destroy();
    header("Location: Stacruzbayan.php?Stacruz");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Municipality</title>
      
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


<div class="count">
    <img src="images/baoc.jpg">

<p>The capital of the province, the most populous town in the province Boac remains the center of industry, culture, economy, and education. Most government and private offices are in the municipality of Boac. It also borders all five municipalities. Mogpog to the North, Santa Cruz to the Northeast, Torrijos to the East, Buenavista to the South, and Gasan to the Southwest. Boac is named after the Tagalog word, biak, which means divided, due to the Boac River dividing the town in the geographic north and south.</p>

<form method="post">
 <a href="?Boac"><input type="button" value="View more" name="button"></a>
 </form>

    <h4>Mogpog</h4>


    <img src="images/mogpog.png">

<p>The Primary Gateway of the Province through the Balanacan Port, It is the original home of the Moriones Lenten Rites and Kangga Festiva. Mogpog was named after the Tagalog word, mag-aapog or kiln makers abundant in the municipality.</p>

<form action="">
 <a href="?Mogpog"><input type="button" value="View more" name="button"></a>
 </form>

    <h4>Torrijos</h4>


    <img src="images/torrijos.png">

<p>Named after three purported origins from Gen. Torrijos, from torrillos, referring to the cows which pastured in its vast plains, and from torre y hijos, referring to the watchtower men guarding the parish. Torrijos is deemed to be the summer capital of the Province and known for locally-grown strawberries.</p>

<form action="">
 <a href="?Torrijos"><input type="button" value="View more" name="button"><a/>
 </form>

    <h4>Stacruz</h4>


    <img src="images/stacruz.png">

<p>The largest of all the six municipalities in terms of land area and the second most populous town after Boac . It is considered as a secondary municipality after Boac (since it is the capital). Together with Boac, it is also a first-class municipality with established industries and commercial routines.</p>

<form action="">
<a href="?Stacruz"><input type="button" value="View more" name="button"></a>
 </form>

    <h4>Buenavista</h4>


    <img src="images/buenavista.png">

<p>Municipality of Buenavista (Tagalog: Bayan ng Buenavista), is a 4th class municipality in the province of Marinduque, Philippines. The town was named "Buenavista" by Don Cornelio Sadiua, due to its "good view." Its former name was Sabang, which is the river that runs through it. The majority of Buenavistans trace their ancestry to the Don Cornelio Sadiua family.</p>

<form action="">
 <a href="?Buenavista"><input type="button" value="View more" name="button"></a>
 </form>\

    <h4>Gasan</h4>


    <img src="images/gasan.png">

<p>The Cultural Nerve Center of the province. Dubbed as one of the cleanest and greenest municipalities in the Philippines, Gasan's land area covers a forest reserve in the eastern part. It is also the gateway to the island of Mindoro. Handicrafts and the famous Kalutang boasts from the town of Gasan. It was named after gasang-gasang, a local term for corals found in the municipality.
Buenavista and the smallest of the six municipalities. It was once part of the municipality of Gasan known as Sabang. It was named such because of the "good view" of the Tablas Strait and offshore islands.</p>

<form action="">
  <a href="?Gasan"><input type="button" value="View more" name="button"></a>
 </form>

</div>
<div class="foot">

  <p>Copyright &copy; 2022.</p>

        <a href="#"><img src="images/icons/facebook.png"></a>
        <a href="#"><img src="images/icons/twitter.png"></a>
        <a href="#"><img src="images/icons/youtube.png"></a>
        
</div>
</div>
</html>