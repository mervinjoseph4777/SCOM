<?php

    include '../configuration/config.php';
    $conn = mysqli_connect($servername, $username, $password, $database);
    $row="";
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
      }
      else{
        $contactinactive = "";
        $contactactive = "";
        $contactusNum = "";
        $newslettersNum = "";

        // mysql_select_db("db", $conn);

        $result = mysqli_query($conn,"SELECT COUNT(*) FROM contactus WHERE statuscontact='inactive'");
        $contactinactive = mysqli_fetch_array($result);
        $result = mysqli_query($conn,"SELECT COUNT(*) FROM contactus WHERE statuscontact='active'");
        $contactactive = mysqli_fetch_array($result);
        $result = mysqli_query($conn,"SELECT COUNT(*) FROM contactus");
        $contactusNum = mysqli_fetch_array($result);
        $result = mysqli_query($conn,"SELECT COUNT(*) FROM newsletter");
        $newslettersNum = mysqli_fetch_array($result);
    
        echo '<div class="col-md-3 market-update-gd">
            <div class="market-update-block clr-block-2">
                <div class="col-md-4 market-update-right">
                    <i class="fa fa-eye"> </i>
                </div>
                <div class="col-md-8 market-update-left">
                    <h4>Newsletters</h4>
                    <h3>'.$newslettersNum[0].'</h3>
                    <p>.</p>
                    <p>.</p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="col-md-3 market-update-gd">
            <div class="market-update-block clr-block-1">
                <div class="col-md-4 market-update-right">
                    <i class="fa fa-users"></i>
                </div>
                <div class="col-md-8 market-update-left">
                <h4>Contact Us</h4>
                <h3>'.$contactusNum[0].'</h3>
                <p>Active: '.$contactactive[0].'</p>
                <p>Inactive: '.$contactinactive[0].'</p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="col-md-3 market-update-gd">
            <div class="market-update-block clr-block-3">
                <div class="col-md-4 market-update-right">
                    <i class="fa fa-usd"></i>
                </div>
                <div class="col-md-8 market-update-left">
                    <h4>Students</h4>
                    <h3>1,500</h3>
                    <p>.</p>
                    <p>.</p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="col-md-3 market-update-gd">
            <div class="market-update-block clr-block-4">
                <div class="col-md-4 market-update-right">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                </div>
                <div class="col-md-8 market-update-left">
                    <h4>Courses</h4>
                    <h3>1,500</h3>
                    <p>.</p>
                    <p>.</p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>';
          
          mysqli_close($conn);
      }  
?>