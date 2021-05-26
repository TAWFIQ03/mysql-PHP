<?php require_once('connect.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <link rel="stylesheet" href="style.css" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
.color{
    color:white;
}
.table{
    text-align:center;
}
.photopro{
    width: 10vw;
    height: 10vh;
}
</style>
</head>
<body>
  <p><h1><b>Lists the product</b></h1>
  <p class="  col-lg-5"><a href="index.php" class=" submit color btn btn-primary">logout</a></p>
  <?php
  $food=$_GET["nomcaty"];
    $go="SELECT * FROM catigories where catigorie='$food'";
    $resultat=mysqli_query($mybstock,$go);

    $nbr=mysqli_num_rows($resultat);
    echo "<p> Total <b> ".$nbr."</b> Produits</p>";
  ?>  
  
  <p class="col-lg-5"><a href="Add.php" class="btn  btn-primary">add</a></p>
  <table width="100%" class="table  table-dark" border="1">
  
  <thead>
    <tr>
      <th scope="col" class="text-align-center">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Qantity</th>
      <th scope="col">Picture</th>
      <th scope="col">delete</th>
    <th scope="col">editing</th>
      
    </tr>
  </thead>
  <tbody>
    
     <?php
      while($ligne=mysqli_fetch_assoc($resultat))
      {
      ?>
      <tr class="table table-dark">
          <td scope="row"><?php echo $ligne['ID'];?></td>
          <td><?php echo $ligne['name'];?></td>
          <td><?php echo $ligne['quantity'];?></td>
          <td><img src='<?php echo $ligne['img'];?>' class="photopro"></td>
          <td><a class="btn btn-info" href="delete.php?deleteproduct=<?php echo $ligne['ID'];?>">delete</a></td>
          <td><a class="btn btn-info" href="edit.php?editing=<?php echo $ligne['ID'];?>">edit</a></td>

      </tr>
       <?php
      }
      ?> 
  </tbody>

      
</table>


</body>
</html>