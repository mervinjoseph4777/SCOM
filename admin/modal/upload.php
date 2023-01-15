<?php

    include '../configuration/config.php';

    if(isset($_POST['submit'])){
        $file = $_FILES['file'];
        $fileName = $_FILES['file']['name'];
        $fileExt = explode('.',$fileName);
        $fileActualExt = strtolower(end($fileExt));
        if($_FILES['file']['error']===0){
            $fileNameNew = uniqid('', true).".".$fileActualExt;
            $fileDestination = 'assets/uploads/popup/'.$fileNameNew;
            $fileDestinationNew = "../../assets/uploads/popup/".$fileNameNew;
            move_uploaded_file($_FILES['file']['tmp_name'],$fileDestinationNew);
            echo(`<script>
                alert('Image Uploaded Successfully')
            </script>`);
            $conn = mysqli_connect($servername, $username, $password, $database);
            // Check connection
            if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
            }
            else{

                $sql = "UPDATE popup SET path='$fileDestination' WHERE id='001'";

                if (mysqli_query($conn, $sql)) {
                    header("location:../index.php");
                } else {
                echo "Error updating record: " . mysqli_error($conn);
                }

                mysqli_close($conn);

            }
        
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>