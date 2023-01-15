<?php
    $home="";$consulting = "";$training = "";$staffing= "";$aboutus= "";$careers ="";
    if($page==="home"){
        $home = "active";
    }
    elseif($page==="consulting"){
        $consulting = "active";
    }
    elseif($page==="careers"){
        $careers = "active";
    }
    elseif($page==="training"){
        $training = "active";
    }
    elseif($page==="staffing"){
        $staffing = "active";
    }
    elseif($page==="aboutus"){
        $aboutus = "active";
    }

?>
<header id="site-header" class="fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg stroke px-0 py-lg-3">
            <a class="navbar-brand" href="#index.html">
                <img src="http://localhost/php/SCOM/SComputers/assets/images/logo.png" alt="Your logo" title="Your logo" class="img-logo" />
            </a>
            <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                <span class="navbar-toggler-icon fa icon-close fa-times"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mx-lg-auto">
                    <li class="nav-item <?php echo $home ?>">
                        <a class="nav-link" href="http://localhost/php/SCOM/SComputers/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php echo $consulting?>" href="#" id="navbarDropdown"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Consulting<i class="fa-solid fa-caret-down ml-2"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item p-3 mt-1" href="http://localhost/php/SCOM/SComputers/Consulting/services/">Services</a>

                            <a class="dropdown-item p-3 mt-1" href="http://localhost/php/SCOM/SComputers/Consulting/Expertise/">Expertise</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php echo $consulting?>" href="#" id="navbarDropdown"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Training<i class="fa-solid fa-caret-down ml-2"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item p-3 mt-1" href="http://localhost/php/SCOM/SComputers/Training/Individual Training">Individual
                                Training</a>
                            <a class="dropdown-item p-3 mt-1" href="http://localhost/php/SCOM/SComputers/Training/Corporate Training">Corporate Training</a>
                            <a class="dropdown-item p-3 mt-1" href="http://localhost/php/SCOM/SComputers/Training/eLearning"> eLearning </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php echo $consulting?>" href="#" id="navbarDropdown"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Staffing<i class="fa-solid fa-caret-down ml-2"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item p-3 mt-1"
                                href="http://localhost/php/SCOM/SComputers/Staffing/Temporary Staffing/">Temporary Staffing</a>
                            <a class="dropdown-item p-3 mt-1" href="http://localhost/php/SCOM/SComputers/Staffing/Payroll/">Payroll Processing</a>
                            <a class="dropdown-item p-3 mt-1" href="http://localhost/php/SCOM/SComputers/Staffing/Recrutiment/">Recruitment Services</a>
                            <a class="dropdown-item p-3 mt-1" href="http://localhost/php/SCOM/SComputers/Staffing/RPO">RPO</a>
                            <a class="dropdown-item p-3 mt-1" href="http://localhost/php/SCOM/SComputers/Staffing/Search & Selection/">Search & Selection</a>
                        </div>
                    </li>
                    <li class="nav-item <?php echo $aboutus?>">
                        <a class="nav-link" href="http://localhost/php/SCOM/SComputers/About/">About</a>
                    </li>
                    <li class="nav-item <?php echo $consulting?>">
                        <a class="nav-link" href="http://localhost/php/SCOM/SComputers/Careers/">Careers</a>
                    </li>
                </ul>
                <!--/right-btn-->
                <div class="top-righthny-buttton">
                    <a class="btn btn-style btn-white mr-lg-5" href="http://localhost/php/SCOM/SComputers/contactus">
                        Get In Touch <span class="fa fa-long-arrow-right ml-3" aria-hidden="true"></span></a>
                </div>
                <!--/right-btn-->
            </div>


        </nav>
    </div>
</header>