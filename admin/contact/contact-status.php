<?php

    include '../configuration/config.php';
    $conn = mysqli_connect($servername, $username, $password, $database);
    $row="";
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
      }
      else{
            $status = $_GET['status'];
            $id = $_GET['id'];
            $sql = "UPDATE contactus SET statuscontact='$status' WHERE id='$id'";
            $result = mysqli_query($conn,$sql);         
            mysqli_close($conn);
      }  
?>