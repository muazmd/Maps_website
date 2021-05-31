<?php 

session_start();

if (isset($_POST["btn"])){
         echo '<script>alert("your order has been confirmed")</script>';  
          echo '<script>window.location="checkout.php"</script>';
}
if (isset($_POST["maps"])){
    header('location: Maps.php');
}
if(isset($_GET["action"]))  
{  
     if($_GET["action"] == "delete")  
     {  
          foreach($_SESSION["shopping_cart"] as $keys => $values)  
          {  
               if($values["item_id"] == $_GET["id"])  
               {  
                   $id = $_GET['id']; // get id through query string

                   $del = mysqli_query($connect,"delete from tblemp where id = '$id'"); // delete query
                   if($del)
{
   mysqli_close($db); // Close connection
   header("location:cart.php"); // redirects to all records page
   exit;	
}
//else
//{
 //  echo "Error deleting record"; // display error message if not delete
//}
                    unset($_SESSION["shopping_cart"][$keys]);  
                    echo '<script>alert("Item Removed")</script>';  
                    
               }  
          }  
     }  
} 
?>
<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" class="btn btn-outline-info" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
    </head>

    <style>
#header{
     height: 85px;
     background-color:  #1c3969;
	 margin-bottom: 10px;
   }
  #header img{
    width: 150px;
    position: absolute;
    left: 14px;
    top: 10px;
  }
  body{
	  background: #171A21;
      color:lightblue;
  }
  label{
	  color:lightblue;
  }
        
    </style> 
    
    <body>
    <div id="header">
        <img id="logo" src="maps.jpg" >
     </div>
        <div style="clear:both"></div>  
                <br />  
                <h3>Order Details</h3>  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="40%">Item Name</th>  
                                
                               <th width="20%">Price</th>  
                               <th width="15%">Total</th>  
                               
                          </tr>  
                          <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $values["item_name"]; ?></td>  
                                
                               <td>$ <?php echo $values["item_price"]; ?></td>  
                               <td><a href="checkout.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>  
                          </tr>  
                          <?php  
                                    $total = $total +  $values["item_price"];  
                               }  
                          ?>  
                          <tr>  
                               <td colspan="2" >Total</td>  
                               <td align="left">$ <?php echo number_format($total, 2); ?></td>  
                               
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
           <br />  

     
    </div>

    
    </div>
<form action="checkout.php" method='POST'>
<button href="Maps.php" name="maps" class="btn btn-outline-success"> Continue Shopping</button>

<button class="btn btn-outline-success" name="btn"  > Order</button>
</form>
    

    </body>
    <script>
        
        function order(){
            alert('your order is confirmed ');
        }
                          
        
    </script>
    </html>
