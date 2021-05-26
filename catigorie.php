<?php require_once('connect.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>catigory page</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
.card-body{
  height: 100px;
  text-align:center;
  background:#f8f7ff;
}
</style>
</head>
<body>


    
<p><a href="home.php" class="btn btn-primary ml-4 mt-4 submit">Back</a></p>
<br>
<h1 class="text-align-center">Categories</h1>
</div>

<?php
$reqSelect="SELECT DISTINCT catigorie,img FROM catigories";
$resultat= mysqli_query($mybstock,$reqSelect);

while($ligne=mysqli_fetch_assoc($resultat))
{
?>
<div class=" container">

<div class="row">


  <div class="col"><br><br>
    <div class="card">
      <div class="card-body">
        <a href="affichecatigory.php?nomcaty=<?php echo $ligne['catigorie'];?>" id="catigory" class="btn btn-info"><?php echo $ligne['catigorie'];?></a>
        
      </div>
    </div>
  </div>
</div>
<?php } ?>



</body>
</html>