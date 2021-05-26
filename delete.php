<?php require_once('connect.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page delete</title>
    <link rel="stylesheet" href="style.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div id="container">
<form name="formdelet" class="formulaire">
<p><a  href="home.php" class="btn btn-primary submit">Back To Table</a></p>

  
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
         echo "<label style='text-align:center; font-family:bold 50px; color:green;'>success";
     }else{
         echo "<label style='text-align:center; font-family:bold 50px; color:red;'>oops";
     }
?>
</form>

</body>
</html>