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
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
.hull{
    border: 5px;
    background-color:#FCF0DE;
    padding: 10px;
}
</style>
</head>
<body>
<div id="container">
<form name="formdelet" class="formulaire">

<p><a href="index.php" class="btn btn-primary btn-md mr-1">logout</a></p>
 <?php
    $reqselect="select * from catigories order by catigorie desc";
    $resultat=mysqli_query($mybstock,$reqselect);

    $nbr=mysqli_num_rows($resultat);
    echo "<p> Total <b> ".$nbr."</b> Produits</p>";
  ?>
</div>

</form>



<div class="container ">
    
    
        <div class="row">
        <div class="col-lg hull ml-lg-5">
          <div>
     
    <div class="card-body ">
      <h4 class="card-title">Catigory Page</h4>
      <p class="card-text">when you wanna see our category the  possible</p>
      <br>
      <a href="catigorie.php" class="btn btn-info  ">View Catigory</a>
    </div>
     </div>
                </div>
                <br><br>
       <!-- the two -->
       <div class="col-lg hull ml-lg-5">
         <div >
                   
                    
                        
                  
       
   
    <div class="card-body">
      <h4 class="card-title">Veiw & Add</h4>
      <p class="card-text">Some product in our stock</p>
      <br>
      <a href="afficheTable.php" class="btn btn-info">View table & adding new product</a>
    </div>
    </div>
    </div>
                </div>
  </div>
</div>

</body>
</html>