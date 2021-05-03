<?php
  echo "<style>
  table, th, td {
    border: 1px solid black;
  }
  </style>";

  $mysqli = new mysqli("mysql.eecs.ku.edu", "cadedotson", "peiR4eed", "cadedotson");
  if ($mysqli->connect_errno){
    printf("Connect Failed: %s\n", $mysqli->connect_error);
    exit();
  }
  echo "<table><tr>";
  echo "<th>User:</th></tr>";
  $query = "SELECT user_id FROM Users";
  if ($result = $mysqli->query($query)){
      while ($row = $result->fetch_assoc()) {
        echo "<tr><td>$row[user_id]</td></tr>";
      }
  }else{
    echo "Error recovering usernames";
  }

  echo "</table>";
?>
