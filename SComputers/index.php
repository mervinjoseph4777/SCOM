<!DOCTYPE html>
<html lang="en">

<?php
  require_once("phpinclude/head.php");
?>

<body>
  <?php 
    $page = 'home';
    require_once('phpinclude/header.php')
  ?>

  <div class="swiper mySwiper scoml-banner">
    <div class="swiper-wrapper">
      <div class="swiper-slide slide1 scoml-banner-content">
        <div class="bannerhny-info container">
          <h3 class="">Reach Your Business Goals.</h3>
          <p class="my-3 text-white">Find out the best consulting group with various areas of expertise and outstanding
            services.</p>
          <a class="btn btn-style btn-outline-light mt-sm-1 mt-1" href="http://localhost/php/SCOM/SComputers/About">
            Read More <span class="fa fa-long-arrow-right ml-3" aria-hidden="true"></span>
          </a>
        </div>
      </div>
      <div class="swiper-slide slide2 scoml-banner-content">
        <div class="bannerhny-info container">
          <h3 class="">Creativeness Can Do Best Business.</h3>
          <p class="my-3 text-white">We provide best solutions and outstanding services. We value our customers.</p>
          <a class="btn btn-style btn-outline-light mt-sm-5 mt-4" href="http://localhost/php/SCOM/SComputers/About">
            Read More <span class="fa fa-long-arrow-right ml-3" aria-hidden="true"></span></a>
        </div>
      </div>
      <div class="swiper-slide slide3 scoml-banner-content">
        <div class="bannerhny-info container">
          <h3 class="">Great Team. Best Results.</h3>
          <p class="my-3 text-white">We hire the top 2% talents that suit your work requirement. We believe that great
            team delivers best results.</p>
          <a class="btn btn-style btn-outline-light mt-sm-1 mt-1" href="http://localhost/php/SCOM/SComputers/About">
            Read More <span class="fa fa-long-arrow-right ml-3" aria-hidden="true"></span>
          </a>
        </div>
      </div>
    </div>
    <div class="swiper-button-next swiper-icon"></div>
    <div class="swiper-button-prev swiper-icon"></div>
    <div class="swiper-pagination swiper-icon"></div>
  </div>

  <!-- clients -->
  <section class="scoml-clients" id="clients">
    <div class="container">
      <div class="call-scom">
        <div class="company-logos text-center">
          <div class="row logos">
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 pl-lg-0">
              <img src="http://localhost/php/SCOM/SComputers/assets/images/logo1.png" alt="" class="img-fluid">
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 pl-lg-0">
              <img src="http://localhost/php/SCOM/SComputers/assets/images/logo2.png" alt="" class="img-fluid">
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mt-sm-0 mt-4 pl-lg-0">
              <img src="http://localhost/php/SCOM/SComputers/assets/images/logo3.png" alt="" class="img-fluid">
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mt-md-0 mt-4 pl-lg-0">
              <img src="http://localhost/php/SCOM/SComputers/assets/images/logo4.png" alt="" class="img-fluid">
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mt-lg-0 mt-4 pl-lg-0">
              <img src="http://localhost/php/SCOM/SComputers/assets/images/logo5.png" alt="" class="img-fluid">
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mt-lg-0 mt-4 pl-lg-0">
              <img src="http://localhost/php/SCOM/SComputers/assets/images/logo1.png" alt="" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" id="modalBtn"
    style="display:none">
    Launch demo modal
  </button>

  <!-- Modal -->
  <div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-headers">
          <!-- <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5> -->
          <button type="button" class="close px-4 py-1" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" id="modal-body">

        </div>
      </div>
    </div>
  </div>

  <section class="scoml-about-ab pt-lg-3" id="about">
    <div class="midd-scom py-5">
      <div class="container py-lg-5 py-md-4 py-2">
        <div class="row" style="align-items:center;">
          <div class="col-lg-7 pl-lg-5 align-self mt-lg-0 mt-4">
            <div class="title-content text-left">
              <h6 class="title-subhny">Who We Are</h6>
              <h3 class="title-scoml mb-sm-5 mb-4 pb-lg-2">It All Started With<br>One Fortunate Idea.</h3>
            </div>
            <h5 class="color-3 mb-3 pr-lg-5">Over 20 years of experience in
              providing high quaility services to our clients.
            </h5>
            <p class="pr-lg-5">Scom Infotech is driven by strong leadership with a long term focus which strives towards
              excellence by envisioning the future. As an organization, we bring to the table a unique
              combination of strong Compliance framework, Technology, Domain Expertise, Processes and People; to cater
              to our client’s buisness requirements on a consistent basis.We place tremendous emphasis on compliance
              with applicable labour laws and regulations in an industry that is for the most part highly unorganized.
              We have made significant investments in our proprietary technological platforms that have contributed
              significantly to operational efficiencies and the scale of our operations.


              <p class="mt-4 pr-lg-5">We have centralized our Operations, Finance, IT and Regulatory Compliance teams in
                Bangalore
              </p>
              <a href="about.html" class="btn btn-style btn-primary mt-lg-5 mt-4">Read More <span
                  class="fa fa-long-arrow-right ml-3" aria-hidden="true"></span></a>
          </div>
          <div class="col-lg-5 left-wthree-img pr-lg-4">
            <div class="imgscoml-ab mb-md-5 mb-3">
              <img src="http://localhost/php/SCOM/SComputers/assets/images/side.png" alt=""
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
        <h3 class="title-scoml mb-sm-5 mb-4 pb-lg-2">Scom Infotech is the one stop solution
          <br>for all your employment related services.</h3>
      </div>
      <div class="row">
        <div class="col-lg-5">
          <p class="color-3 mb-3 pr-lg-5">We provide diverse HR solutions enabled with the right combination of people,
            process and technology that works together to create value for our clients. Pan India presence that has
            allowed us to scale our business with increasing trust and reliability of both our clients and associate
            employees.</p>
          <p class="mt-4 pr-lg-5"><b>We offer the following services</b>
          </p>
          <p class="mt-4 pr-lg-5"><i class="fa-solid fa-caret-right mr-2"></i>Staffing
          </p>
          <p class="mt-4 pr-lg-5"><i class="fa-solid fa-caret-right mr-2"></i>Recruitment
          </p>
          <p class="mt-4 pr-lg-5"><i class="fa-solid fa-caret-right mr-2"></i>Regulatory Compilance
          </p>
          <p class="mt-4 pr-lg-5"><i class="fa-solid fa-caret-right mr-2"></i>Payroll Processing
          </p>
          <p class="mt-4 pr-lg-5"><i class="fa-solid fa-caret-right mr-2"></i>Learning Services
          </p>
          <a href="about.html" class="btn btn-style btn-primary mt-lg-5 mt-4">Read More <span
              class="fa fa-long-arrow-right ml-3" aria-hidden="true"></span></a>
        </div>
        <div class="col-lg-7 left-wthree-img pl-lg-4 mt-lg-0 mt-5">

          <div class="row">
            <div class="box-wrap col-md-6 col-sm-12">
              <div class="box-wrap-grid text-left">
                <div class="icon mb-3">
                  <span class="fa fa-lightbulb-o"></span>
                </div>
                <div class="info">
                  <h4><a href="#url">ISO 27001 Certified </a></h4>
                </div>
                <p class="mt-2">Our services are ISO 27001 certified</p>
              </div>
            </div>
            <div class="box-wrap col-md-6 col-sm-12">
              <div class="box-wrap-grid text-left">
                <div class="icon mb-3">
                  <span class="fa fa-paint-brush"></span>
                </div>
                <div class="info">
                  <h4><a href="#url">World round presence</a></h4>
                </div>
                <p class="mt-2">We are present in serveral industries around the world</p>
              </div>
            </div>
            <div class="box-wrap col-md-6 col-sm-12">
              <div class="box-wrap-grid text-left">
                <div class="icon mb-3">
                  <span class="fa fa-line-chart"></span>
                </div>
                <div class="info">
                  <h4><a href="#url">Associates or trainees</a></h4>
                </div>
                <p class="mt-2">Lorem ipsum dolor sit amet consectetur ipsum elit.</p>
              </div>
            </div>
            <div class="box-wrap col-md-6 col-sm-12">
              <div class="box-wrap-grid text-left">
                <div class="icon mb-3">
                  <span class="fa fa-bullhorn"></span>
                </div>
                <div class="info">
                  <h4><a href="#url">Clients</a></h4>
                </div>
                <p class="mt-2">Lorem ipsum dolor sit amet consectetur ipsum elit. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="scoml-blog py-5" id="blog">
    <div class="container py-lg-5 py-md-4 py-2">
      <div class="title-content text-left">
        <h6 class="title-subhny">SCOM INFRASTRUCTURE</h6>
        <h3 class="title-scoml pb-sm-o pb-2">Our Divisions</h3>
      </div>
      <div class="row text-11">
        <!--/services-grids-->
        <div class="col-md-6 text11-content blog-grid-info text-left mt-5">
          <div class="card">
            <div class="card-header p-0 position-relative border-0">
              <a href="#">
                <img class="card-img-bottom d-block radius-image" src="assets/images/b3.jpg" alt="Card image cap">
              </a>
            </div>
            <div class="card-body p-0 blog-details">
              <br>
              <a href="#" class="blog-desc"> Infrastructure for Clients</a>
              <p>Our Web based Dashboard and Client Connect Portal provides clients 24/7 access to all relevant
                information. -http://scominfotech.in. Clients can view and print more than 25 various reports on
                associate headcount, resignee details, joining trend, compliance adherence reports and many more such
                details. It also helps clients to access all relevant data across various business units and teams in a
                consolidated and comprehensive manner.</p>
              <p>Dedicated Contact Centre which includes Client Hotline – (+91 80 29527901 /+91 8494949595) where our
                clients can reach us at our Pan India Priority Access Number for on the spot resolution to their query &
                a dedicated E-mail id – info@scominfotech.in where a detailed query can be shared. Both these channels
                are on Salesforce platform to ensure TAT adherence for every query resolution.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 text11-content blog-grid-info text-left mt-5 pl-lg-4">
          <div class="card">
            <div class="card-header p-0 position-relative border-0">
              <a href="#">
                <img class="card-img-bottom d-block radius-image" src="assets/images/b4.jpg" alt="Card image cap">
              </a>
            </div>
            <div class="card-body p-0 blog-details">
              <br>
              <a href="#" class="blog-desc"> Infrastructure for Associates</a>
              <p>The associates also have access to an Associate Login – http://scominfotech.in, which enables them to
                view and modify personal details (Address/Phone number), download pay slips etc.</p>
              <p>Apart from our technology and process driven approach, our strength also lies in our people. Be it in
                the areas of operations and payroll or recruitment or in legal and compliance or training and
                assessments, our delivery teams are highly competent and carry extensive collective experience and
                knowledge.

                With Pan India presence and the corporate office in Bangalore, Scom Infotech has sufficient on ground
                capabilities to cater to its client’s hiring; compliance administration and other requirements at the
                location level as well.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-5">
    <div class="container py-md-1 py-1">
      <div class="title-content text-left">
        <h4 class="title-scoml mb-4" style="color:#007bff">Our Clients</h4>
        <h5 class="mb-sm-5 mb-4 pb-lg-2">It's our pleasure to
          serve our wonderful clients</h5>
      </div>
    </div>
    <div class="row">
      <div class="container carousel">
        <section class="logo-carousel slider" data-arrows="true">
          <div class="slide"><img
              src="https://raw.githubusercontent.com/solodev/infinite-logo-carousel/master/images/image1.png"></div>
          <div class="slide"><img
              src="https://raw.githubusercontent.com/solodev/infinite-logo-carousel/master/images/image2.png"></div>
          <div class="slide"><img
              src="https://raw.githubusercontent.com/solodev/infinite-logo-carousel/master/images/image3.png"></div>
          <div class="slide"><img
              src="https://raw.githubusercontent.com/solodev/infinite-logo-carousel/master/images/image4.png"></div>
          <div class="slide"><img
              src="https://raw.githubusercontent.com/solodev/infinite-logo-carousel/master/images/image5.png"></div>
          <div class="slide"><img
              src="https://raw.githubusercontent.com/solodev/infinite-logo-carousel/master/images/image6.png"></div>
          <div class="slide"><img
              src="https://raw.githubusercontent.com/solodev/infinite-logo-carousel/master/images/image7.png"></div>
          <div class="slide"><img
              src="https://raw.githubusercontent.com/solodev/infinite-logo-carousel/master/images/image8.png"></div>
        </section>
      </div>
    </div>
  </section>


  <section class="home-scoml-content py-5">
    <div class="container">
      <div class="row home-scoml-content-grids">
        <div class="col-lg-4 home-scoml-content-grid mt-lg-0 mt-4">
          <h5 class="">Call Our Support</h5>
          <p class="home-scoml-content-grid-inf">
            24 / 7 Support Line : <span class="fa fa-phone mr-1"></span> <a href="tel:+1(21) 234 4567">9494949453
            </a>
          </p>
        </div>
        <div class="col-lg-4 home-scoml-content-grid px-lg-4 mt-lg-0 mt-4">
          <h5 class="">Our Location</h5>
          <p>WhiteField Bangalore 560002.</p>
        </div>
        <div class="col-lg-4 home-scoml-content-grid mt-lg-0 mt-4">
          <h5 class="">Our Newsletter</h5>
          <form action="newsletter/newsletter_form.php" class="subscribe d-flex text-lg-right" method="post">
            <input type="email" name="email" placeholder="Email Address" required="">
            <button class="btn btn-style btn-primary" type="submit">Subscribe</button>
          </form>
        </div>
      </div>
    </div>
  </section>



  <?php
    include_once('phpinclude/footer.php');
  ?>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      cssMode: true,
      loop: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      mousewheel: true,
      keyboard: true,
    });



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

    function getImagePath() {

      var xmlhttp = new XMLHttpRequest();
      xmlhttp.open("POST", "home/modal.php", true);
      xmlhttp.send();
      xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          // console.log(this.responseText);
          document.getElementById('modal-body').innerHTML = this.responseText;
        }
      };
    }


    $(document).ready(function () {
      $('.logo-carousel').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1000,
        arrows: true,
        dots: false,
        pauseOnHover: false,
        responsive: [{
          breakpoint: 768,
          settings: {
            slidesToShow: 4
          }
        }, {
          breakpoint: 520,
          settings: {
            slidesToShow: 2
          }
        }]
      });
    });
  </script>


</body>

</html>