<?php
    session_start();
    echo $_SESSION['uname'];
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $reg = test_input($_POST['username']);
        $password = test_input($_POST['password']);
        if($reg=='scomadmin' && $password == 'scomadmin1234'){
            $_SESSION['uname'] = $reg;
            header('location:http://localhost/php/SCOM/SComputers/admin/');
        }
        else{
            echo '<script>
                alert("Incorrect username or password");
            </script>';
        }
    }

    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>