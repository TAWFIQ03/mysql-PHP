<?php

if (isset($_POST['creat'])) {
  include "../connect.php";
  function validate($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  $name = validate($_POST['user']);
  
  $pass = validate($_POST['pass']);

  $user_data = 'username=' . $name . 'upassword=' . $pass;

  if (empty($name)) {
    header("Location: ../index.php?error=Name is required&$user_data");
  } else  {

    $sql = "INSERT INTO login(username,  upassword) 
               VALUES('$name' , '$pass')";
    $result = mysqli_query($mybstock, $sql);
    // if ($result) {
    //   header("Location: ../read.php?success=successfully created");
    // } else {
    //   header("Location: ../index.php?error=unknown error occurred&$user_data");
    // }
  }
}