<?php
    include('../configuration/config.php');
    if($_SERVER["REQUEST_METHOD"]== "POST"){
        $t=time();
        $email = test_input($_POST["email"]);
        $conn = mysqli_connect($servername,$username,$password,$database);
        if(!$conn){
            die("Sorry failed to connect!");
        }
        else{
            $sql = "INSERT INTO newsletter VALUES('$t','$email','active')";
            try{
                $result = mysqli_query($conn, $sql);
                echo '<script>
                        let text = "You will receive our updates from now on. Thank You!";
                        if (confirm(text) == true) {
                            window.open("../index.php","_self");
                        } else {
                            window.open("../index.php","_self");
                        }
                </script>';
            }
            catch(Exception $e){
                echo '<script>
                        let text = "Your email is already registered. Thank You";
                        if (confirm(text) == true) {
                            window.open("../index.php","_self");
                        } else {
                            window.open("../index.php","_self");
                        }
                </script>';
            }
            
        }
    }

    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>