<?php require_once('connect.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Add</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
   <div id="container">
   <img src="" alt="">
       <form name="formAdd" action="" method="POST" class="formulaire" enctype="multipart/form-data">
           <h2 align="center">Add a new product</h2>
          

           <label><b>Name :</b></label>
           <input type="text" name="usernamee" class="thepageadd" placeholder="product name" required>

           <label><b>prix :</b></label>
           <input type="number" name="ubuy" class="thepageadd" placeholder="Prix" required>

           <label><b>quantity :</b></label>
           <input type="number" name="quantity" class="thepageadd" placeholder=" quantity" required>

           <label><b>stars :</b></label>
           <input type="number" name="stars" class="thepageadd" placeholder="stars" required>

           <label><b>catigorie :</b></label>
           <input type="text" name="catigorie" class="thepageadd" placeholder="catigorie" required>


           <label><b>picture :</b></label>
           <input type="file" name="picture" class="thepageadd" value="pc" placeholder="upload pc" required>

           <input type="submit" name="save" value="Add" class="submit">

           <p><a href="home.php" class="submit">Table</a></p>
           <label style="text-align:center;color:#060706">
                <?php
                if(isset($_POST['save']))
                {
                    
                    $name=$_POST['usernamee'];
                    $buy=$_POST['ubuy'];
                    $quantity=$_POST['quantity'];
                    $stars=$_POST['stars'];
                    $catigorie=$_POST['catigorie'];
                    $picture=$_FILES['picture']['tmp_name'];
                    $uplaod="myimgs/".$_FILES['picture']['name'];
                    move_uploaded_file($picture,$uplaod);
                    $reqAdd="INSERT INTO catigorie(`id`, `name`, `buy`, `quantity`, `stars`, `catigorie`, `picture`) 
                    VALUES (','$name','$buy','$quantity','$stars','$catigorie','$uplaod')";
               
              $resultat=mysqli_query($mybstock,$reqAdd);
              if($resultat){
                  echo "success";
              }else{
                  echo "oops";
              }

  
                     
                }
                ?>

           </label>
       </form>
   </div> 
</body>
</html>