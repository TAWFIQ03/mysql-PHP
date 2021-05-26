<?php require_once('connect.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page editing</title>
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
   <form name="formUpdate" method="POST" action="" class="formulaire" enctype="multipart/form-data">
     <h2 align="center">Update product</h2>
     <br><br>

     <p><a href="home.php" class="btn btn-primary submit">Back To Table</a></p>
     <br><br>
     <div class="form-group">
     <?php
    if (isset($_GET['editing'])) {
        $id = $_GET['editing'];
        $sql = "SELECT * FROM catigories WHERE ID='$id'";
          $result = mysqli_query($mybstock, $sql);
          $ligne=mysqli_fetch_assoc($result);
        
        
      }
            if(isset($_POST['submit']))
              {
                $editting= $_SESSION['ID'];
                $name=$_POST['name'];
                $prix=$_POST['buy'];
                $quantity=$_POST['quantity'];
                $stars=$_POST['stars'];
                $catigorie=$_POST['catigorie'];
                

                $image=$_FILES['picture']['tmp_name'];

                $target="myimgs/".$_FILES['picture']['name'];

               $photo= move_uploaded_file($image,$target);

                $reqUpd="UPDATE catigories SET buy='$prix',name='$name'
                ,quantity='$quantity',stars='$stars',catigorie='$catigorie',img='$photo'
                 WHERE ID='$editting'";
                 $resultat=mysqli_query($mybstock, $reqUpd);
                 if($resultat)
                 {
                     echo "uplaod successsss";
                 }else{
                     echo "ooops";
                 }
              }
           ?>


    
    <input  name="ID" value="<?= $ligne['ID'] ?>" id="inputsm" type="hidden" required>
  </div>


          <div class="form-group">
    <label for="inputsm">Name :</label>
    <input class="form-control col-lg input-lg" name="name" value="<?= $ligne['name'] ?>" placeholder="Product Name" id="inputsm" type="text" required>
  </div>
   <div class="form-group">
    <label for="inputdefault">Prix :</label>
    <input class="form-control col-lg input-lg" id="inputdefault" name="buy" value="<?= $ligne['buy'] ?>" placeholder="Prix"  required type="number">
  </div>
  <div class="form-group">
    <label for="inputlg">Qantity</label>
    <input class="form-control col-lg input-lg"  required placeholder="Qantity" value="<?= $ligne['quantity'] ?>" name="quantity"  type="number">
  </div>
  <div class="form-group">
    <label for="inputlg">Stars</label>
    <input class="form-control col-lg input-lg"  type="number" name="stars"value="<?= $ligne['stars'] ?>"  min="0" max="5"  placeholder="stars" required   >
  </div>
  <div class="form-group">
    <label for="inputlg">Category</label>
    <input class="form-control col-lg input-lg" name="catigorie" value="<?= $ligne['catigorie'] ?>"  placeholder="category" required type="text">
  </div>
  <div class="form-group">
    <label for="inputlg">Picture</label>
    <input class="form-control col-lg input-lg" type="file" value="<?= $ligne['img'] ?>" name="picture" class="thepageadd" value="pc" placeholder="upload pc" required >
  </div>
  <div class="form-group">
    
    <input class="btn btn-primary " type="submit" name="submit" value="submit" class="submit">
  </div>
  </form>

   </div> 


<?php
// $conn = mysqli_connect("localhost","root","","mystock");

// $id =$_GET['ID'];

// $quantite_en_Stock = "";

// $result = mysqli_query($conn, "SELECT * FROM catigories WHERE ID =$id");
// while($row=mysqli_fetch_array($result)){


//     $quantite_en_Stock=$row["name"];
    
// }


?>
<!-- <body style="background-image:url('stck.jpg');background-repeat:no-repeat;background-size:cover;">
<form style="width: 50%;" class="container" action="" method="post">
<?php include "head.php";
?>
  <h1 style="font-weight: bold;text-align:center;">Changer la quantité en stock</h1><br><br>
  <div class="form-group"style="background-color:white; padding: 10px;border-radius:10px;">
    <label for="formGroupExampleInput2">Qt_en_stock</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Qt_en_stock" name="quantite_en_stock" value="<?php echo  $quantite_en_Stock?>">
    <br>
    <input type="submit" class="btn btn-info" name="update" value="update">
  </div>
  
</form>
</body> -->

<?php
                //     if(isset($_POST["submit"])){
                //         mysqli_query($conn,"UPDATE catigorie SET  name='$_POST[name]' WHERE ID=$id");
                //       ?>  
                      <script type="text/javascript">
                // window.location="index.php";
                // </script>
                 <?php
    
                //       }
?>

   
</body>
</html>