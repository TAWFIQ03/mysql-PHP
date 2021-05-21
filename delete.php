<?php require_once('connect.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page delete</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<div id="container">
<form name="formdelet" class="formulaire">
<p><a href="home.php" class="submit">Table</a></p>

  
</div>
<?php
if(isset($_GET['deleteproduct']))
{
    $delete=$_GET['deleteproduct'];
    $reqDelete="DELETE FROM catigories WHERE id='$delete'";
    $resultat=mysqli_query($mybstock,$reqDelete);
}
     if($resultat)
     {
         echo "<label style='text-align: center; color:success;'>success";
     }else{
         echo "<label style='text-align: center; color:danger;'>oops";
     }
?>
</form>

</body>
</html>