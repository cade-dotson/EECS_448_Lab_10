<?php
  //echo "running <br>";
  $mysqli = new mysqli("mysql.eecs.ku.edu", "cadedotson", "peiR4eed", "cadedotson");
  if ($mysqli->connect_errno){
    printf("Connect Failed: %s\n", $mysqli->connect_error);
    exit();
  }

  if(isset($_POST['posts']))
	{
    echo "Deleted posts: ";
		foreach ($_POST['posts'] as $post)
		{
			$query = "DELETE FROM Posts WHERE post_id=$post";
      if ($result = $mysqli->query($query)){
        echo $post;
        echo " ";
      }else{
        echo "<br> Failed to delete post:";
        echo $post;
      }
		}
	}
	else
	{
		echo "Nothing was selected!";
	}

?>
