<!doctype html>
<html>

<?php
    include_once('../../phpinclude/head.php');
?>

<body>

    <?php
        $page = "staffing";
        include_once('../../phpinclude/header.php');
    ?>
    <div class="breadcrumb-bg scoml-inner-page-breadcrumb py-5">
        <div class="container pt-lg-5 pt-md-3 p-lg-4 pb-md-3 my-lg-3">
            <ul class="breadcrumbs-custom-path mt-3 text-center pt-5">
                <li><a href="http://localhost/php/SCOM/SComputers/">Home</a></li>
                <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span>Recruitment Process
                    Outstading
                </li>
            </ul>
        </div>
    </div>
    <!--//breadcrumb-bg-->
    <section class="scoml-about-ab pt-lg-3" id="about">
        <div class="midd-scom py-5">
            <div class="container py-lg-5 py-md-4 py-2">
                <div class="row">
                    <div class="col-lg-7 pl-lg-5 align-self mt-lg-0 mt-4">
                        <div class="title-content text-left">
                            <h3 class="title-scoml mb-sm-5 mb-4 pb-lg-2" style="color:#007bff">Recruitment Process
                                Outstanding
                            </h3>
                        </div>
                        <p class="pr-lg-3">Scom Infotech Recruitment Services offers permanent recruitment solutions to
                            over 500 active clients across the country. The operating 4 X 3 model for Scom Infotech
                            Recruitment Services is as follows
                        </p>
                        <p class="mt-2 pr-lg-3">We bring to the table an experienced team of recruitment professionals,
                            with domain specialisation to cater to specific industries. Our proven track record
                            demonstrates our ability to understand client’s talent needs and provide clients with the
                            right solution to finding key people faster, while freeing up management bandwidth to
                            concentrate on core management activities.
                        </p>
                        <p class="mt-2 pr-lg-3">Our extensive range of service offerings gives the option to our clients
                            to select one or a combination of our Permanent Recruitment Solution. Scom Infotech
                            proprietary recruitment platform, Candidate Life Cycle System (CLCS) has the ability to
                            search and match candidate resumes to Job Descriptions, raising the recruiter validation and
                            quality of the recruitment process a notch higher.


                        </p>
                    </div>
                    <div class="col-lg-5 left-wthree-img pr-lg-4">
                        <div class="imgscoml-ab mb-md-5 mb-3">
                            <img src="http://localhost/php/SCOM/SComputers/assets/images/ab3.jpg" alt=""
                                class="radius-image img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="home-services py-5">
        <div class="container py-md-5 py-2">
            <div class="title-content text-left">
                <h6 class="title-subhny">What We Do</h6>
                <h3 class="title-scoml mb-sm-5 mb-4 pb-lg-2">Watch How Our Team Help You <br>To Achive Goal</h3>
            </div>
            <div class="row mt-lg-0 mt-5 justify-content-center">
                <img src="http://localhost/php/SCOM/SComputers/assets/images/rpo.png" alt="Temporary Staffing Image"
                    class="img img-fluid p-3">
            </div>
        </div>
    </section>



    <?php
        include_once('../../phpinclude/footer.php');
    ?>

    <script src="http://localhost/php/SCOM/SComputers/assets/js/jquery-3.3.1.min.js"></script>
    <script>
        $(document).ready(function () {
            document.getElementById("modalBtn").click();
            getImagePath();
        });

        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });
    </script>
</body>

</html>