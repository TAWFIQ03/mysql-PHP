<?php require_once('connect.php');?>
<!DOCTYPE html>
<html>

<head>
  <title>Create</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="../php-crud/css/style.css">
</head>

<body style="background-color:#1690a7 ;">
  <div class="container">
    <form action="php/create.php" method="post">

      <h4 class="display-4 text-center">signup</h4>
      <hr><br>
      <?php if (isset($_GET['error'])) { ?>
        <div class="alert alert-danger" role="alert">
          <?php echo $_GET['error']; ?>
        </div>
      <?php } ?>
      <div class="form-group">
        <label for="name">username</label>
        <input type="name" class="form-control" id="name" name="user" value="<?php if (isset($_GET['user']))
                                              echo ($_GET['user']); ?>" placeholder="Enter name">
      </div>

     
      <div class="form-group">
        <label for="password">password</label>
        <input type="password" class="form-control" id="password" name="upass" value="<?php if (isset($_GET['upass']))
                                                    echo ($_GET['upass']); ?>" placeholder="Enter password">
      </div>


      <button type="submit" href="../index.php" class="btn" name="create">signup</button>
      

    </form>

     <?php
     
    // $name = $_POST["username"];
    
    // $password = $_POST["upassword"];

    // $call = new mysqli("localhost","root","","mystock");
    // $save = $call->prepare("insert into folder(user_name,password)values(?,?);");
    // $save ->bind_param("sss", $name,$password);
    // $save ->execute();
    // echo "have been done success";

    ?> 
  </div>
</body>

</html>