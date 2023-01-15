<!Doctype html>
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
                <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span>Search & Selection
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
                            <h3 class="title-scoml mb-sm-5 mb-4 pb-lg-2" style="color:#007bff">Search & Selection
                            </h3>
                        </div>
                        <p class="pr-lg-3">Scom Infotech Search specializes in Leadership hiring across industries and
                            verticals. We cover an end-to-end search, drawing up a Skill Matrix, charting the Grade
                            Equivalence as per the requirement and enabling Competency Mapping for suitable selection.
                            Our Search offerings also include Board Level Search, Diversity Search, Succession Planning
                            and Executive Assessments.
                        </p>
                        <p class="mt-2 pr-lg-3">Scom Infotech Contingent Selection aims to fulfil on-going requirements
                            through profiles sourced via our multi-pronged approaches – be it our in-house databases,
                            support from channel partners, field sourcing, market mapping and referrals or even
                            scheduled walk-in drives at our offices. Our specialised recruiters are adept at addressing
                            vertical specific demands, enabled by strong technology support systems to ensure successful
                            mandate delivery and client satisfaction


                        </p>
                    </div>
                    <div class="col-lg-5 left-wthree-img pr-lg-4">
                        <div class="imgscoml-ab mb-md-5 mb-3">
                            <img src="http://localhost/php/SCOM/SComputers/assets/images/ab2.jpg" alt=""
                                class="radius-image img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
        include_once('../../phpinclude/footer.php')
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