<?php

    include '../configuration/config.php';
    $conn = mysqli_connect($servername, $username, $password, $database);
    $row="";
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
      }
      else{
        $id = $_GET['id'];
        $sql = "DELETE FROM newsletter WHERE id like '$id'";
        $result = mysqli_query($conn,$sql);          
        mysqli_close($conn);
      }  
?>