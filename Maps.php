<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Maps</title>
  <style>
  *{
    padding: 0;
    margin: 0;
  }
  body{
background-color: #171A21;
  }
   #header{
     height: 65px;
     background-color:  #1c3969;
     padding-bottom: 10px;
   }
  #header img{
    width: 150px;
    height: 55px;
    position: absolute;
    left: 14px;
    top: 10px;
  }
  #header a{
    position: absolute;
    right: 15px;
    top: 35px;
    color: lightgrey;
    text-decoration: none;
    font-size: 25px;
  }
  #header a:hover {
  color: #b05f02;
}
  .categories{
    display: inline;
    
  }
  #menu{
   width: 700px;
   margin: auto;
   font:16pt  Arial, sans-serif;
   left: 25px;
   margin-top: 50px;
  }
  .categories a{
    text-decoration: none;
    color: lightgray;
  
  }
  #menu a:hover {
  color: #b05f02;
}
#leftm{
  width: 200px;
  height: 100px;
  position: absolute;
  left: 40px;
  margin-top: 60px;
  font: 18px Arial, sans-serif;
  color: lightgray;
  text-decoration: none;
}
#leftm h4{
  font-size: 21px;
  color:#4958e0;
}
   #leftm li {
    list-style-type: none;
   }
   #leftm li a{
     text-decoration: none;
     color: lightgrey;
   }
   #leftm a:hover {
  color: #0977aa;
}
footer{
  text-align: center;
  background-color: #171A21;
  font-size: 12pt;
  color: lightgray;
  margin-top: 550px;
  border-top: 5px solid #0977aa;
}
footer a{
  text-decoration: none;
  color: lightgray;
}
footer a:hover {
  color: #b05f02;}
  #img1{
    width: 300px;
    height: 250px;
  }
  #center{
    width: 750px;
    margin: auto;
    position: absolute;
    left: 400px;
    margin-top:100px;
    color: lightgray;
    font: Arial, sans-serif;
  }
  #img2{
    width: 400px;
    height: 250px;
  }
  #center a{
    text-decoration: none;
    color: rgb(25, 165, 207);
  }
  #center a:hover {
  color: #b05f02;}
  </style>
</head>
<body>
    <div id="header">
   <img id="logo" src="maps.jpg" >

</div>
<div id="menu">
  <ul>
   <li class="categories"><a href="MAPS_fps.php">Fps</a></li> &nbsp; &nbsp; &nbsp; &nbsp;  <li class="categories"><a href="MAPS_survival.php">Survival</a></li> &nbsp; &nbsp; &nbsp; &nbsp; <li class="categories"><a href="MAPS_Strategy.php">Strategy</a></li>&nbsp; &nbsp; &nbsp; &nbsp;
     <li class="categories"><a href="Maps_openworld.php">Open World</a></li> &nbsp; &nbsp; &nbsp; &nbsp; <li class="categories"><a href="Special Deals.php">Special Deals</a></li>

  </ul>
</div>
<div id="leftm">
  <ul>
   <li><h4>Recommended</h4></li>
   <br>
   <li><a href="#">Friends</a></li>
   <li><a href="#">Creators</a></li>
   <li><a href="#">tags</a></li>
   <br>
   <li><h4>Discovery Queqe</h4></li>
   <br>
   <li><a href="MAPS_fps.php">New releases</a></li>
   <li><a href="Maps_openworld.php">Recommendation</a></li>
   <br>
   <li><h4>Browse By Genre</h4></li>
   <br>
   <li><a href="MAPS_fps.php">Fps</a></li>
   <li><a href="MAPS_survival.php">Survival</a></li>
   <li><a href="MAPS_strategy.php">Strategy</a></li>
   <li><a href="Maps_openworld.php">Open World</a></li>
   <br>
   <li><h4>Specials %</h4></li>
   <br>
   <li><a href="Special Deals.php">Special Deals</a></li>

  </ul>
</div>

<div id="center">
<img src="cold.jpg" id="COD Cold War">
<img src="img3.jpg" id="img2">
<h2>Expereince Call of duty Black ops 4 and DaysGone now for Free:</h2> <br>
<h4>Play call of duty Black ops 4 and DaysGone now for free, download it now and keep it forever.</h4>
<h4>The offer expires on june 18</h4> <br><br>
<h2>Click Here to Download call of duty COld War<a href="Special Deals.php"> Download</a></h2>
<h2>Click Here to Download DaysGone <a href="Special Deals.php">  Download</a></h2>

</div>



</body>
<footer>
  <div>
  <h3><a href="#">Maps.com</a></h3>
    <ul>
    <li>Lebanon</li>
    <li>78/821499</li>
    <li>Contact Us At:  Maps@gmail.com
    </li></ul>
    </div>

</footer>

</html>

  
  
 