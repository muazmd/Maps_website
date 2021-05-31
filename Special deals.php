<?php   
 session_start();  
 $connect =  mysqli_connect("den1.mysql5.gear.host","mynewmapsdb","Nt6XF!38iz!A","mynewmapsdb");  
 if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["id"],  
                     'item_name'               =>     $_POST["hidden_name"],  
                     'item_price'          =>     $_POST["hidden_price"],  
                      
                );  
                echo '<script>alert("Item added successfully")</script>';  
                echo '<script>window.location="Special deals.php"</script>'; 
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="Special deals.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["id"],  
                'item_name'               =>     $_POST["hidden_name"],  
                'item_price'          =>     $_POST["hidden_price"],  
                 
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="Special deals.php"</script>';  
                }  
           }  
      } 

 } 
 if(isset($_POST['checkout'])){
      header("location:checkout.php");
 } 
 ?>  
<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="Maps.ico" >
    <title>Special Deals | Maps</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" class="btn btn-outline-info" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f5f92436ce.js" crossorigin="anonymous"> </script>
 <style>  
    
        body{
            background: #171a21;;
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
  }
  #header a{
    position: absolute;
    right: 15px;
    top: 35px;
    color: lightgrey;
    text-decoration: none;
    font-size: 25px;}
  

    
       h5{
          color: lightgray;
          size: 15px !important;
      }
    

      
      .categories{
    display: inline;
    
  }
  #menu{
   width: 800px;
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
footer{
  text-align: center;
  background-color: #171A21;
  font-size: 12pt;
  color: lightgray;
  
  border-top: 5px solid #0977aa;
}
footer a{
  text-decoration: none;
  color: lightgray;
}
ul li{
     list-style-type: none;
}
footer a:hover {
  color: #b05f02;}
       

 #price{
     color: lightgrey;
 }
 .chbtn{
      padding: 15px;
      /* align: center; */
      /* margin-left: 550px */
 }
 .old{
      text-decoration: line-through;
 }
       </style>
    
</head>
<body>
    <div id="header">
        <img id="logo" src="maps.jpg" >

     </div>
     <div id="menu">
        <ul>
            <li class="categories"><a href="MAPS.php">Home</a></li> &nbsp; &nbsp; &nbsp; &nbsp;
            <li class="categories"><a href="MAPS_fps.php">Fps</a></li> &nbsp; &nbsp; &nbsp; &nbsp;
            <li class="categories"><a href="MAPS_survival.php">Survival</a></li> &nbsp; &nbsp; &nbsp; &nbsp;
            <li class="categories"><a href="MAPS_Strategy.php">Strategy</a></li>&nbsp; &nbsp; &nbsp; &nbsp;
            <li class="categories"><a href="MAPS_openworld.php">Open World</a></li> &nbsp; &nbsp; &nbsp; &nbsp;
            <li class="categories"><a href="Special Deals.php">Special Deals</a></li>
      
        </ul>
      </div>
      <br />  
           <div class="container-fluid " >  
           
                <?php  
                $query = "SELECT * FROM games WHERE genre=5 ORDER BY id ASC";  
                $result = mysqli_query($connect, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  
                
           
                <div class="col-sm-4">  
                     <form method="post" action="Special deals.php?action=add&id=<?php echo $row["id"]; ?>" >  
                          <div style=" background-color:#171A21;  ; padding:16px;" align="center ">  
                               <img src="/images/special/<?php echo $row["image"]; ?>" height="200px" width="300px"  class="img-responsive" /><br />  
                               <h4 class="text-info"><?php echo $row["name"]; ?></h4>  
                               <h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>  
                               <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />  
                               <h4 class="old">59$</h4><input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />  
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />  
                          </div>  
                     </form>  
                </div>
               
                
                      
                <?php  
                     }  
                }  
                ?>  
                <div style="clear:both"></div>  
                <br />  
               
                       
           <br />  
 <center>
 <form method="post">
         <div class="chbtn"><button name="checkout" class="btn btn-outline-success" >Proceed to Checkout 
         <i class="fas fa-shopping-cart"></i>   </button></div>   
         </form></center> 

     



         <footer>
         <div>
        
        <ul>
        <li><a href="Maps.php">Maps.com</a></li>
        <li>Lebanon</li>
        <li>78/821499</li>
        <li>Contact Us At:  Maps@gmail.com
        </li></ul>
        </div>
      
      </footer> 

    
</body>

</html>