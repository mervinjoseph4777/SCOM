<?php 
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
</head>
<body>
    <div>
        <h3>Upload Image</h3>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="file" value="">
            <button type="submit" name="submit">
                Upload Image
            </button>
        </form>
    </div>
</body>
</html>