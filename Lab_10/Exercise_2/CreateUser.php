<?php
  $username = $_POST["name"];
  //echo $username;

  $mysqli = new mysqli("mysql.eecs.ku.edu", "cadedotson", "peiR4eed", "cadedotson");
  if ($mysqli->connect_errno){
    printf("Connect Failed: %s\n", $mysqli->connect_error);
    exit();
  }
  //echo "sqli connected";
  $query = "SELECT user_id FROM Users";
  if ($result = $mysqli->query($query)){
    while ($row = $result->fetch_assoc()) {
      if ($username == $row["user_id"]){
        echo "Error: Username already in use.";
        exit();
      }
      //echo $row["user_id"];
    }
    $query = "INSERT INTO Users (user_id) VALUES ('$username')";
    if($mysqli->query($query)){
      echo "Username succesfully added!";
    }else{
      echo "Unknown error ocurred";
    }
  }else{
    echo "unknown error";
  }
?>
