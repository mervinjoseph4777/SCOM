<?php
    session_start();   
    if(isset($_SESSION['uname'])){
        header('location:http://localhost/php/SCOM/SComputers/admin/');
    }
?>

<!DOCTYPE html>

<head>
    <title>SCOM Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="None" />
    <link rel="stylesheet" href="http://localhost/php/SCOM/SComputers/assets/css/bootstrap.min.css">
    <link href="http://localhost/php/SCOM/SComputers/assets/css/style-admin.css" rel='stylesheet' type='text/css' />
    <link href="http://localhost/php/SCOM/SComputers/assets/css/style-admin-responsive.css" rel="stylesheet" />
</head>

<body class="admin-log">
    <div class="log-scom">
        <div class="scomlayouts-main">
            <h2>SCOM ADMIN PANEL</h2>
            <form action="welcome.php" method="POST">
                <input type="text" class="ggg" name="username" placeholder="USERNAME" required="">
                <input type="password" class="ggg" name="password" placeholder="PASSWORD" required="">
                <div class="clearfix"></div>
                <input type="submit" value="Sign In">
            </form>
        </div>
    </div>
</body>

</html>