<?php

    include '../configuration/config.php';
    $conn = mysqli_connect($servername, $username, $password, $database);
    $row="";
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
      }
      else{
          $sql = "SELECT * from contactus";
        //   echo $_GET['status'];
          $result = mysqli_query($conn,$sql);
          $no = 1;
            // echo "Error updating record: " . mysqli_error($conn);
            while($row = mysqli_fetch_assoc($result)){
                if($row['statuscontact']===$_GET['status']){
                    
                        echo '<tr  id="'.$row['id'].'"> 
                        <td>'.$no.'</td>
                        <td>'.$row['name'].'</td>
                        <td>'.$row['email'].'</td>
                        <td>'.$row['num'].'</td>
                        <td>'.$row['message'].'</td>
                        <td>
                            <select onchange="changeInStatus()" id="Instatus">
                                <option selected disabled>None</option>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </td>
                        <td>
                            <button class="btn btn-danger" id="'.$row['id'].'" onclick="deleteContact(this.id)">
                                <i class="fa-solid fa-trash-can"></i>
                            </button>
                        </td>
                        
                    </tr>';
                    $no++;
                }
            
          } 
          
          mysqli_close($conn);
      }  
?>