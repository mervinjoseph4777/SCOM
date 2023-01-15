<?php
    include '../configuration/config.php';
    if($_SERVER["REQUEST_METHOD"]== "POST"){
        $t=time();
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $tel = test_input($_POST["num"]);
        $message = test_input($_POST["message"]);
        $conn = mysqli_connect($servername,$username,$password,$database);
        if(!$conn){
            die("Sorry failed to connect!");
        }
        else{
            $sql = "INSERT INTO contactus VALUES('$t','$name', '$email', '$tel', '$message', 'active')";
            $result = mysqli_query($conn, $sql);
            if($result){
                echo '<script>
                        let text = "Thank you for your message. We will get back to you soon";
                        if (confirm(text) == true) {
                            window.open("contactus.php","_self");
                        } else {
                        text = "You canceled!";
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