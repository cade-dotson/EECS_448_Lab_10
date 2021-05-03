<?php
  echo "<style>
  table, th, td {
    border: 1px solid black;
  }
  </style>";

  $username = $_GET["userlist"];
  //echo $username;
  $mysqli = new mysqli("mysql.eecs.ku.edu", "cadedotson", "peiR4eed", "cadedotson");
  if ($mysqli->connect_errno){
    printf("Connect Failed: %s\n", $mysqli->connect_error);
    exit();
  }


  echo "<table><tr>";
  echo "<th>Posts by $username:</th></tr>";
  $query = "SELECT content FROM Posts WHERE author_id='$username'";
  if ($result = $mysqli->query($query)){
    //echo "query returned true";
    while ($row = $result->fetch_assoc()) {
      //echo $row[content];
      echo "<tr><td>$row[content]</td></tr>";
    }
  }
  echo "</table>";
?>
