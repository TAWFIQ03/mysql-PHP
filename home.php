<?php 
require_once 'connect.php';
if(isset($_GET['deleteproduct']))
{
    $delete=$_GET['deleteproduct'];
    $reqDelete="DELETE FROM catigories WHERE id='$delete'";
    $resultat=mysqli_query($mybstock,$reqDelete);
    if($resultat)
    {
        echo "<label style='text-align: center; color:#964906;'>la supprission a validé";
    }else{
        echo "<label style='text-align: center; color:#964906;'>la supprission a échouée";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<div id="container">
<form name="formdelet" class="formulaire">

<p><a href="index.php" class="submit">logout</a></p>
 <?php
    $reqselect="select * from catigories order by catigorie desc";
    $resultat=mysqli_query($mybstock,$reqselect);

    $nbr=mysqli_num_rows($resultat);
    echo "<p> Total <b> ".$nbr."</b> Produits</p>";
  ?> 
  <p><a href="afficheTable.php" class="submit">view table</a></p>
  <p><a href="catigorie.php" class="submit">view catigory</a></p>
  
 
</div>

<!-- <div>
<p><a href="afficheTable.php" class="submit">the food</a></p>
</div>
<div>
<p><a href="afficheTable.php" class="submit">the phone</a></p>
</div> -->
</form>

</body>
</html>