<!-- <?php require_once('connect.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
  <p><h1><b>Lists the product</b></h1>
  <p><a href="index.php" class="submit">logout</a></p>
  <?php
  $food="phones";
    $reqselect="select * from catigories where catigorie='$food'";
    $resultat=mysqli_query($mybstock,$reqselect);

    $nbr=mysqli_num_rows($resultat);
    echo "<p> Total <b> ".$nbr."</b> Produits</p>";
  ?>  
  
  <p><a href="Add.php">add</a></p>
  <table width="100%" border="1">
      <tr>
          <th>ID</th>
          <th>name</th>
          <th>quantity</th>
          <th>picture</th>
          <th>delete</th>
          <th>editing</th>
      </tr>
      <?php
      while($ligne=mysqli_fetch_assoc($resultat))
      {
      ?>
      <tr>
          <td><?php echo $ligne['ID'];?></td>
          <td><?php echo $ligne['name'];?></td>
          <td><?php echo $ligne['quantity'];?></td>
          <td><img src='<?php echo $ligne['img'];?>' class="photopro"></td>
          <td><a href="delete.php?deleteproduct=<?php echo $ligne['ID'];?>">delete</a></td>
          <td><a href="edit.php?editing=<?php echo $ligne['ID'];?>">edit</a></td>

      </tr>
       <?php
      }
      ?> 
      
</table>

<style>
.photopro{
    width: 10vw;
    height: 10vh;
}
</style>
</body>
</html> -->