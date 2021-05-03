<?php
  $post = $_POST["post"];
  $username = $_POST["name"];
  //echo $username;

  $mysqli = new mysqli("mysql.eecs.ku.edu", "cadedotson", "peiR4eed", "cadedotson");
  if ($mysqli->connect_errno){
    printf("Connect Failed: %s\n", $mysqli->connect_error);
    exit();
  }

  $query = "SELECT user_id FROM Users";
  if ($result = $mysqli->query($query)){
    while ($row = $result->fetch_assoc()) {
      //echo "$row[user_id]";
      if ($username == $row["user_id"]){
        $query = "INSERT INTO Posts (content, author_id) VALUES ('$post', '$username')";
        if($mysqli->query($query)){
          echo "Post added!";
          exit();
        }
        else{
          echo "Error adding post";
          exit();
        }
      }
      //echo $row["user_id"];
    }
    echo "Error: Username not found";
    exit();
  }
?>
