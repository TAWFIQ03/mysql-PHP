<?php require_once('connect.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css" />

</head>
<body>
<!-- new -->

<div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box">
                <div class="col-lg-12 login-key">
                    <i class="fa fa-key" aria-hidden="true"></i>
                </div>
                <div class="col-lg-12 login-title">
                    ADMIN PANEL
                </div>
 
                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <form>
                            <div class="form-group">
                                <label class="form-control-label">USERNAME</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">PASSWORD</label>
                                <input type="password" class="form-control" i>
                            </div>
 
                            <div class="col-lg-12 loginbttm">
                                <div class="col-lg-6 login-btm login-text">
                                    <!-- Error Message -->
                                </div>
                                <div class="col-lg-6 login-btm login-button">
                                    <button type="submit" class="btn btn-outline-primary">LOGIN</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>
<!-- old -->
    <div id="container">
        <form action="" method="POST" class="formulaire">
            <h1>Connecting</h1>
            <label><b>username :</b></label>
            <input type="text" placeholder="username" name="user" required class="zonetext">
            <label><b>password :</b></label>
            <input type="password" placeholder="password" name="upass" required class="zonetext">
            <input type="submit" name="submit" value="LOGIN" id="submit" class="submit">
            <p><a href="signup.php" class="submit">signup</a></p>
             <?php
             if(isset($_POST['submit']))
             {
                 $req="select * from login where username='".$_POST['user']."' and upassword='".$_POST['upass']."'"; 
                if($resultat=mysqli_query($mybstock,$req))
                {
                   $ligne = mysqli_fetch_assoc($resultat);
                   if($ligne=1){
                       session_start();
                       $_SESSION['']=$_POST['user'];
                       header("location:home.php");    
                    
              
                 }
                    } else{
                        echo "<font color='red'>oops</font>";
                    } 
                }       
        
             
             ?>
    </div>
    
</body>
</html>