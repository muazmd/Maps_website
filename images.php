<?php
$msg="";
if(isset($_POST['upload'])){
    if(!empty($_POST['genere'])){
        foreach ($_POST['genere'] as $selected){
            if($selected == "Survival"){
                $target = "/images/survival/".basename($_FILES['image']['name']);
                $db = mysqli_connect("den1.mysql5.gear.host","mynewmapsdb","Nt6XF!38iz!A","mynewmapsdb");

                $image= $_FILES['image']['name'];

                $name = $_POST['name'];
                $price = $_POST['price'];
                $sql= "INSERT INTO games (name, image, price,genre) VALUES ('$name','$image' ,'$price',1)";
                mysqli_query($db,$sql);

                if (move_uploaded_file($_FILES['image']['tmp_name'], $target)){
                    $msg= "This Game has been added succesfully ";
                    echo "$msg";
                }
                else{
                    $msg ="There was a problem uploading the image";
                }
              }
        if($selected == "Strategy"){
                $target = "/images/strategy/".basename($_FILES['image']['name']);
                $db = mysqli_connect("den1.mysql5.gear.host","mynewmapsdb","Nt6XF!38iz!A","mynewmapsdb");

                $image= $_FILES['image']['name'];

                $name = $_POST['name'];
                $price = $_POST['price'];
                $sql= "INSERT INTO games (name, image, price,genre) VALUES ('$name','$image' ,'$price',2)";
                mysqli_query($db,$sql);

                if (move_uploaded_file($_FILES['image']['tmp_name'], $target)){
                    $msg= "This Game has been added succesfully ";
                    echo "$msg";
                }
                else{
                    $msg ="There was a problem uploading the image";
                }
                            }
        if($selected == "open world"){
                $target = "/images/openworld/".basename($_FILES['image']['name']);
                $db = mysqli_connect("den1.mysql5.gear.host","mynewmapsdb","Nt6XF!38iz!A","mynewmapsdb");

                $image= $_FILES['image']['name'];

                $name = $_POST['name'];
                $price = $_POST['price'];
                $sql= "INSERT INTO games (name, image, price, genre) VALUES ('$name','$image' ,'$price',3)";
                mysqli_query($db,$sql);

                if (move_uploaded_file($_FILES['image']['tmp_name'], $target)){
                    $msg= "This Game has been added succesfully ";
                    echo "$msg";
                }
                else{
                    $msg ="There was a problem uploading the image";
                }
                            }
            if($selected == "Special Deals"){
                $target = "/images/special/".basename($_FILES['image']['name']);
                $db = mysqli_connect("den1.mysql5.gear.host","mynewmapsdb","Nt6XF!38iz!A","mynewmapsdb");

$image= $_FILES['image']['name'];

$name = $_POST['name'];
$price = $_POST['price'];
$sql= "INSERT INTO games (name, image, price, genre) VALUES ('$name','$image' ,'$price',5)";
mysqli_query($db,$sql);

if (move_uploaded_file($_FILES['image']['tmp_name'], $target)){
    $msg= "This Game has been added succesfully ";
    echo "$msg";
}
else{
    $msg ="There was a problem uploading the image";
}
            }
            if($selected == "FPS"){
                $target = "/images/fps/".basename($_FILES['image']['name']);
                $db = mysqli_connect("den1.mysql5.gear.host","mynewmapsdb","Nt6XF!38iz!A","mynewmapsdb");

$image= $_FILES['image']['name'];

$name = $_POST['name'];
$price = $_POST['price'];
$sql= "INSERT INTO games (name, image, price,genre) VALUES ('$name','$image' ,'$price',4)";
mysqli_query($db,$sql);

if (move_uploaded_file($_FILES['image']['tmp_name'], $target)){
    $msg= "This Game has been added succesfully ";
    echo "$msg";
}
else{
    $msg ="There was a problem uploading the image";
}
            }
            
        }
    }
}
if(isset($_POST['browsing'])){
    header("location: Maps.php");
}

?>

<!DOCTYPE html>
<html>

<head>
<link rel="icon" href="Maps.ico" >
<style >
body{
         background-color: #171a21;
    }
#header{
     height: 85px;
     background-color:  #1c3969;
   }
  #header img{
    width: 150px;
    position: absolute;
    left: 14px;
    top: 10px;
  }</style>
<title>Image Upload | Maps"</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/f5f92436ce.js" crossorigin="anonymous"> </script>
</head>
<body>
<div id="header">
        <img id="logo" src="maps.jpg" >
  
     </div>
    <div class="container">
    <table class="table tble-borderless">
    <form method="POST" action="images.php" enctype="multipart/form-data">
   <tr><td><label for=""> Upload image here </label></td>
   <td>
   <div>
   <input type="hidden" name="size" value="1000000">
    <input type="file"  name="image">
    </div>
   </td>
   </tr>
   <tr>
   <td><label for="">Enter the name of the game here</label></td>
    <td><textarea name="name" cols="40" rows="4" placeholder="Enter a name for this game"></textarea></td>

   </tr>
    
    <tr>
    <td><label for="">Enter the Price here</label></td>
    <td> <textarea name="price" cols="40" rows="4" placeholder="Enter a Price for this game"></textarea></td>
    </tr>
    <tr>
    <td><label for="">Choose the genere </label></td>
    <td>
    
  <select name="genere[]" id="">
  <option value="" disabled selected> Choose</option>
    <option value="open world"> open world</option>
    <option value="Survival"> Survival</option>
    <option value="FPS"> FPS</option>
    <option value="Strategy" > Strategy</option>
    <option value="Special Deals"> Special Deals</option>
  </select>
 
    
    </tr>
     <tr>
     <td><input type="submit" class="btn btn-outline-info" name="upload" value="upload"></td>
     <td><input type="submit" class="btn btn-outline-info" name="browsing" value="continue browsing " id=""></td>
     </tr>
    
    </div>
        </table>

    </div>
    </form>


</td>
    
    </div>
</body>



</html>