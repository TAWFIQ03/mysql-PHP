<?php require_once('connect.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<!-- new -->


      
            <?php
             if(isset($_POST['submit']))
             {
                 $req="SELECT * FROM login WHERE username='".$_POST['user']."' AND upassword='".$_POST['upass']."'"; 
                if($resultat=mysqli_query($mybstock,$req))
                {
                   $ligne = mysqli_fetch_assoc($resultat);
                   if($ligne!=0){
                       session_start();
                       $_SESSION['']=$_POST['user'];
                       header("location:home.php");    
                    
              
                 }
                    } else{
                        echo "<font color='red'>oops</font>";
                    } 
                }       
        
              ?>
           
        
  


<div class="container">
<form  class="form" action="" method="POST">
    <div id="login">
        <h3 class="text-center text-white pt-5">Login User</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="user" id="username" require class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="text" name="upass" id="password" require class="form-control">
                            </div>
                            <div class="form-group">
                                
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
                            <div id="register-link" class="text-right">
                               
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
     
</body>
</html>