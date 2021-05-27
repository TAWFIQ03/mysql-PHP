<?php require_once('connect.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Add</title>
    <link rel="stylesheet" href="style.css" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
.form-control {
    background:#F0EFCF;
    width: 80vw;
    justify-items:center;
    
}
.form-group{
    margin-left:120px;
}

</style>
</head>
<body>
   <div id="container">
   <img src="" alt="">
       <form name="formAdd" action="" method="POST" class="formulaire" enctype="multipart/form-data">
           <h2 align="center">Add a new product</h2>

           <p class="col-lg-5"><a href="home.php" class="btn btn-primary submit">Back</a></p>
           
           <form>
  <div class="form-group">
    <label for="inputsm">Name :</label>
    <input class="form-control col-lg input-lg" name="usernamee" placeholder="Product Name" id="inputsm" type="text" required>
  </div>
   <div class="form-group">
    <label for="inputdefault">Prix :</label>
    <input class="form-control col-lg input-lg" id="inputdefault" name="ubuy" placeholder="Prix"  required type="number">
  </div>
  <div class="form-group">
    <label for="inputlg">Qantity</label>
    <input class="form-control col-lg input-lg"  required placeholder="Qantity" name="quantity"  type="number">
  </div>
  <div class="form-group">
    <label for="inputlg">quantity_min</label>
    <input class="form-control col-lg input-lg"  type="number" name="stars" min="0" max="5"  placeholder="quantity_min" required   >
  </div>
  <div class="form-group">
    <label for="inputlg">Category</label>
    <input class="form-control col-lg input-lg" name="catigoriie"  placeholder="category" required type="text">
  </div>
  <div class="form-group">
    <label for="inputlg">Picture</label>
    <input class="form-control col-lg input-lg" type="file" name="picture" class="thepageadd" value="pc" placeholder="upload pc" required >
  </div>
  <div class="form-group">
    
    <input class="btn btn-primary " type="submit" name="save" value="save" class="submit">
  </div>

                <?php
                if(isset($_POST['save']))
                {
                    
                    $name=$_POST['usernamee'];
                    $buy=$_POST['ubuy'];
                    $quantity=$_POST['quantity'];
                    $stars=$_POST['stars'];
                    $catigorie=$_POST['catigoriie'];
                    $picture=$_FILES['picture']['tmp_name'];
                    $uplaod="myimgs/".$_FILES['picture']['name'];
                    move_uploaded_file($picture,$uplaod);
                    $reqAdd="INSERT INTO catigories(`name`, `buy`, `quantity`, `quantity_min`, `catigorie`, `img`) 
                    VALUES ('$name','$buy','$quantity','$stars','$catigorie','$picture')";
               
              $resultat=mysqli_query($mybstock,$reqAdd);
              if($resultat){
                  echo "success";
              }else{
                  echo "oops";
              }

  
                     
                }
                ?>

           
       </form>
   </div> 
</body>
</html>