
<?php
    include '../configuration/config.php';
    $conn = mysqli_connect($servername, $username, $password, $database);
    $row="";
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
      }
      else{
          $sql = "SELECT * from popup WHERE id='001'";
          $result = mysqli_query($conn,$sql);
          
            // echo "Error updating record: " . mysqli_error($conn);
            while($row = mysqli_fetch_assoc($result)){
                echo '<img src='.$row['path'].' alt="pipup-image" class="img-fluid" style="width:100%;">';
          } 
          mysqli_close($conn);
      }  
?>