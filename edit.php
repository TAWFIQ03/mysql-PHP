<?php require_once('connect.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page editing</title>
    <link rel="stylesheet" href="style.css" />

</head>
<body>
   <div id="container">
   <form name="formUpdate" method="POST" action="" class="formulaire" enctype="multipart/form-data">
     <h2 align="center">Update product</h2>

          

           <label><b>Name :</b></label>
           <input type="text" name="username" class="zonetext" placeholder="name of product" required>

           <label><b>Prix :</b></label>
           <input type="number" name="buy" class="zonetext" placeholder=" Prix" required>

           <label><b>quantity :</b></label>
           <input type="number" name="quantity" class="zonetext" placeholder="quantity" required>

           <label><b>stars :</b></label>
           <input type="number" name="stars" class="zonetext" placeholder="number stars" required>

           <label><b>Catigory :</b></label>
           <input type="text" name="catigorie" class="zonetext" placeholder="Entrer Catigory" required>

           <label><b>picture :</b></label>
           <input type="file" name="picture" class="zonetext" placeholder="uplaod picture" required>

           <input type="submit" name="submite" value="uplaod" class="submit">

           <p><a href="home.php" class="submit">Table</a></p>

           <label style="text-align:center;color:#964906">

           <?php
              if(isset($_POST['submite']))
              {
                
                $name=$_POST['username'];
                $prix=$_POST['buy'];
                $quantity=$_POST['quantity'];
                $stars=$_POST['stars'];
                $catigirie=$_POST['catigorie'];
                $editing=$_GET['editing'];

                $image=$_FILES['picture']['tmp_name'];

                $target="myimgs/".$_FILES['picture']['name'];

                move_uploaded_file($image,$target);

                $reqUpd="UPDATE catigorie SET usrename='$name',buy='$prix'
                ,quantity='$quantity',stars='$stars',category='$catigirie',photo='$target'
                 WHERE id='$editing'";
                 $resultat=mysqli_query($mybstock,$reqUpd);
                 if($resultat)
                 {
                     echo "uplaod success";
                 }else{
                     echo "ooops";
                 }
              }
           ?>


   </form>

   </div> 
</body>
</html>