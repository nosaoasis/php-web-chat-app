<?php 
  $conn = mysqli_connect("localhost", "root", "", "chat");
  if ($conn){
    echo "Database connected";
  } else {
    echo "Error" . $conn->connect_error;
  }
?>