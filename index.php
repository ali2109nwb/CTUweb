<?php
if (isset($_POST['submit'])) {
  

    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    $name = $_POST['name'];

    $from = $_POST['email'];

    $to = "sales@ctu-indonesia.com";

    $subject = $_POST['subject'];

    $message = $_POST['message'];

    $headers = "From:" . $from;
    if (mail($to, $subject, $message, $headers)) {
        echo "The email message was successfully sent.";
        echo "Thank You";
        echo "<script>console.log('Headers: " . $headers . "' );</script>";
    } else {
        echo "The email message was not sent.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Cipta Teknik Utama</title>
  <meta content="PT Cipta Teknik Utama" name="description">
  <meta content="Wall Video, Kiosk" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <link rel="stylesheet" id="pps_style-css" href="assets/vendor/popup-press/css/pps_style_ver=2.9.7.css" type="text/css" media="screen">




  <style id="pps_style-inline-css" type="text/css">
    .pps-popup {}

    .pps-popup .pps-wrap {}

    .pps-popup .pps-wrap .pps-close {}

    .pps-popup .pps-wrap .pps-content {}
  </style>
  <link rel="stylesheet" id="tablepress-default-css" href="assets/vendor/tablepress/css/default.min_ver=1.9.2.css" type="text/css" media="all">
  <!-- JavaScript-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.10.0.min.js"></script>
  <!-- <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/pps_script_ver=2.9.7.js"></script>
  <script type="text/javascript" src="assets/js/bpopup_ver=0.10.js"></script> -->



</head>

<body>

<!-- ======= Top Bar ======= -->
<!-- <section id="topbar">
    <div class="container d-flex">
        <div class="contact-info mr-auto">
            <ul>
                <li><i class="icofont-envelope"></i> <a href="mailto:sales@ctu-indonesia.com" class="email-link">sales@ctu-indonesia.com</a></li>
                 <li><i class="icofont-phone"></i> 021 65302105</li> -->
            </ul>
        </div>
    </div>
</section> 

<style>
    #topbar {
        display: flex; 
        padding: 1px 0; 
    }

    .email-link {
        color: white;
        text-decoration: none; 
    }

    .email-link:hover {
        color: red; 
    }
</style>


  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href><span><img src="assets/img/logoCTU.png"></span></a></h1>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#header">Home</a></li>
          <li><a href="#about">About</a></li>
          <li class><a href="#product">Product</a></li>
         
          <li><a href="web/references">References</a></li>
          <li class><a href="news">News</a></li>
          <li><a href="web/detail/6">Contact</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Custom Size Carousel</title>
  <style>
   
    .carousel-item {
      position: relative;
      height: 650px; /* Set the carousel height to a fixed size */
    }

    .carousel-img {
      width: 100%;
      height: 100%;
      object-fit: cover; /* Ensures the image covers the entire container without stretching */
      object-position: center;
    }

    /* Define the animation for the text */
    @keyframes fadeInUp {
      0% {
        opacity: 0;
        transform: translateY(110px); /* Start with text lower and invisible */
      }
      100% {
        opacity: 1;
        transform: translateY(50px); /* End with text in place and fully visible */
      }
    }

    .carousel-caption {
      padding: 20px;
      color: white; /* Ensures the text is visible on most images */
      background: none !important; /* Completely remove any background color */
      opacity: 0; /* Start with invisible text */
    }

    .carousel-item.active .carousel-caption {
      animation: fadeInUp 1s ease-in-out forwards; /* Apply the animation when active */
    }

    /* Move the left control further to the left */
    .carousel-control-prev {
      left: -80px !important; /* Move button more to the left */
    }

    /* Move the right control further to the right */
    .carousel-control-next {
      right: -80px !important; /* Move button more to the right */
    }

    /* Optional - customize the controls */
    .carousel-control-prev-icon,
    .carousel-control-next-icon {
      background-color: rgba(0, 0, 0, 0.5); /* Darken the control icons */
      border-radius: 50%;
    }

    .batu-image {
      position: absolute;
      top: -50px;
      width: 780px;
      right: 0px;
      left: -240px;
      z-index: 0;
    }

    .floating-image {
      position: absolute;
      top: -120px;
      width: 650px;
      right: -40px;
      z-index: 0;
    }

    .index {
      z-index: 20;
    }

    .img-featured, .img-featured img{
      width: 65%;
      display: block;
      margin-left: auto;
      margin-right: auto;
    }
    .description{
      color: rgba(0, 0, 0, 0.6);
      font-size: 1rem;
    }
    .border-logo{
      /* background-color: rgba(180, 185, 201, 0.08); */
      border-radius: 20px;
      flex: 0 0 auto;
      overflow: hidden;
      position: relative;
      height: auto;
      width: auto;
      padding: 10px;
    }

    .btn-product{
      margin-top: 10px;
      height: 50px;
      width: auto;
      padding: 15px;
      background: linear-gradient(271deg, rgb(255, 84, 84) 0%, rgb(255, 84, 84) 100%) rgb(255, 84, 84);
      color: white;
      text-decoration: none;
      border-radius: 15px;
    }

    .btn-product:hover{
      margin-top: 10px;
      height: 50px;
      width: auto;
      padding: 15px;
      background: lightskyblue;
      color: white;
      text-decoration: none;
      border-radius: 15px;
    }

    /* Fitured Solutions css */
    .fitur-solutions {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); 
      gap: 30px; 
      padding: 120px;
      max-width: 1200px;
      margin: 0 auto;
    }

    .card {
      position: relative;
      overflow: hidden;
      border-radius: 8px;
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
      background-color: #fff;
      transition: transform 0.3s ease-in-out;
    }

    .card:hover {
      transform: translateY(-10px); 
    }

    .card-image {
      width: 100%;
      height: 200px; 
      object-fit: cover; 
    }

    .card-content {
      padding: 15px;
      text-align: center;
    }

    .card-content h3 {
      font-size: 1.2rem;
      margin-bottom: 10px;
      color: #ff7b00; 
    }
    .card-content p {
      font-size: 0.95rem;
      color: #555;
    }
     /* card news */
    .card-news {
      position: relative;
            width: 700px;
            background: linear-gradient(135deg, #0c192c, #243c5a);
            color: white;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
            display: flex;
            flex-direction: column;
            gap: 10px;
    }

    .button-news {
            background: #0066ff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            font-size: 14px;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            font-weight: bold;
        }

        .button-news:hover {
            background: #0052cc;
        }

        .card-news-title {
            font-size: 20px;
            font-weight: bold;
        }

        .card-news-content {
            font-size: 14px;
            opacity: 0.8;
        }

        .divider-news {
            width: 100%;
            height: 1px;
            background: rgba(255, 255, 255, 0.2);
            margin: 10px 0;
        }

  </style>
  <!-- Bootstrap CSS (Make sure to include Bootstrap for the carousel to work) -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<!-- hero section -->
<!-- <section>

</section> -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <!-- First slide -->
    <div class="carousel-item active">
      <!-- <a href="web/detail/6"> -->
      <img class="d-block w-100 carousel-img" src="assets/img/background/hero-back.jpg" alt="Second slide">
        <div class="carousel-caption d-md-block">
        <!-- <div class="card-news">
          <button class="button-news">More Info →</button>
          <div class="card-news-title">Government Threatens to Block IMEI of iPhone 16 Sold in Indonesia</div>
          <div class="divider-news"></div>
          <div class="card-news-content">
              The government through the Ministry of Industry (Kemenperin) plans to block or deactivate the International Mobile Equipment Identity (IMEI) serial number of the iPhone 16 sold in Indonesia.
          </div>
        <div> -->
        <!-- <img class="floating-image" src="assets/imgbackground/hero-back.jpg" alt="Second slide"> -->
        <div class="container index">
          <h1>Your Device, Our Protection. Protecting What Matters Most</h1>
        </div>
        </div> 
    </div> 
      </a>
    </div> 
  </div>
</div>

<!-- Bootstrap JS and dependencies (jQuery and Popper.js) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.amazonaws.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>


    <!-- ======= Fitured Solutions ======= -->
    <div class="overlay-text" style="position: absolute; color: #000; text-align: center; width: 100%; padding: 20px; margin-bottom: 50px margin-top: 10px">
      <h2>Featured Solution</h2>
      <p>Discover the future of productivity and efficiency with innovative solutions.</p>
    </div>
    </div>
    <div class="fitur-solutions"> 
    <!-- Box 1 -->
    <div class="card">
      <img src="assets/img/930poster.png" alt="Safety Image" class="card-image">
      <div class="card-content">
        <h3>Maximum Safety and Durability</h3>
        <p>Test for Extreme Conditions. Devices are engineered to withstand harsh environments.</p>
      </div>
    </div>
    <!-- Box 2 -->
    <div class="card">
      <img src="assets/img/fastcomm.png" alt="Communication Image" class="card-image">
      <div class="card-content">
        <h3>Faster Communication</h3>
        <p>Stay Connected Anywhere. Experience swift and efficient communication.</p>
      </div>
    </div>
    <!-- Box 3 -->
    <div class="card">
      <img src="assets/img/easyman.png" alt="Solutions Image" class="card-image">
      <div class="card-content">
        <h3>Integrated Solutions</h3>
        <p>Seamless Connectivity. Easily integrate our rugged devices into your system.</p>
      </div>
    </div>
    <!-- Box 4 -->
    <div class="card">
      <img src="assets/img/easyman.png" alt="Management Image" class="card-image">
      <div class="card-content">
        <h3>Easy Management</h3>
        <p>Control at Your Fingertips. Monitor your team with real-time location tracking.</p>
      </div>
    </div>
  </div>
    <section id="clients" class="clients" style="background: radial-gradient(34.7% 46.7% at 105.1% 40.6%, rgb(179, 233, 255) 10.0768%, rgba(255, 255, 255, 0.25) 56.0414%, rgba(255, 255, 255, 0) 100%),radial-gradient(60% 40.4% at -33.7% 30.5%, rgb(198, 158, 255) 0%, rgb(255, 255, 255) 100%);">
      <div class="container" data-aos="fade-up" style="margin-bottom: 50px;">
        <h1 data-aos="fade-up" class="text-center"><strong>Our Partners</strong></h1>
        <div style="height: 40px"></div>
        <div class="owl-carousel clients-carousel">
            <img class="border-logo" src="assets/img/clients/agille.png" alt="Agille Mobile" class="border-logo">
            <img class="border-logo" src="assets/img/clients/bartec.png" alt="Bartec Pixavi">
            <img class="border-logo" src="assets/img/clients/client-1.png" alt="Vewell">
            <img class="border-logo" src="assets/img/clients/client-4.png" alt="Bliz">
            <img class="border-logo" src="assets/img/clients/client-5.png" alt="FireBlock">
            <img class="border-logo" src="assets/img/clients/Logo_New_April_2022.png" alt="i.safe Mobile">
            <img class="border-logo" src="assets/img/clients/RugGear_Logo_Black.png" alt="RugGear">
            <img class="border-logo" src="assets/img/clients/Bright_LED_Logo.png" alt="BrightLED">
          </div>
        </div>

      </div>

      <div class="container" data-aos="fade-up">
        <h1 data-aos="fade-up" class="text-center"><strong>Our Clients</strong></h1>
        <div style="height: 40px"></div>
        <div class="owl-carousel clients-carousel">

          <img class="border-logo" src="assets/img/clients/basarnas.png" alt="Basarnas">

          <img class="border-logo" src="assets/img/clients/pertamina.png" alt="Pertamina">

          <img class="border-logo" src="assets/img/clients/gbi.png" alt="GBI MOI">

          <img class="border-logo" src="assets/img/clients/bms.png" alt="Bank Mandiri Syariah">

          <img class="border-logo" src="assets/img/clients/kemensos.png" alt="Kementerian Sosial">

          <img class="border-logo" src="assets/img/clients/telkom.png" alt="Telkom">

          <img class="border-logo" src="assets/img/clients/jasamarga.png" alt="Jasamarga">
        </div>
      </div>
    </section>

<section id="product" class="values" src="https://framerusercontent.com/images/MuT6IoXsdmAkYegkSf7FacB2b8Y.jpg" style="background: linear-gradient(90deg, rgba(0,162,233,1) 0%, rgba(0,162,233,1) 48%, rgba(230,33,41,1) 100%);">
  <div class="container">
    <div class="section-title" data-aos="fade-up">
      <h1><strong>Our Products</strong></h1>
    </div>
     <div class="row text-center p-0">
      <div class="col-md-4">
        <img decoding="async" loading="lazy" src="assets/img/bartec.png" alt="" style="display: block; width: 100%; height: 100%; border-radius: inherit; object-position: center center; object-fit: cover;">
      </div>
      <div class="col-md-4">
        <div class="action-product py-5">
          <h5 class="text-center">Check Our Product</h5>
          <br>
          <div class="btn mx-5">
          <a href="" class="btn-product">SEE MORE PRODUCT</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <img decoding="async" loading="lazy" src="assets/img/bartec.png" alt="" style="display: block; width: 100%; height: 100%; border-radius: inherit; object-position: center center; object-fit: cover;">
      </div>
    </div>
  </div>
</section>




  <!-- ======= Footer ======= -->
  <footer id="footer" style="background-color: black; color: white; padding: 20px 0; font-family: Arial, sans-serif; font-size: 14px; line-height: 1.5;">

<div class="container" style="max-width: 1200px; margin: 0 auto;">
    <div class="row" style="display: flex; flex-wrap: wrap; align-items: flex-start;">

        <!-- Logo dan Company Info -->
        <div class="col-lg-3 col-md-6 footer-contact" style="flex: 1; min-width: 200px; margin-bottom: 20px;">
            <h3 style="font-size: 18px; font-weight: bold; margin: 0;">PT Cipta Teknik Utama</h3>
            <p style="margin: 5px 0 0;">
            
            </p>
        </div>

        <!-- Headquarters -->
        <div class="col-lg-2 col-md-6 footer-links" style="flex: 1; min-width: 180px; margin-bottom: 20px;">
            <h4 style="font-size: 16px; font-weight: bold; margin-bottom: 10px;">Headquarter</h4>
            <p style="margin: 0;">Sedayu City, Blok GSOC No. 20 Cakung Barat, Jakarta Timur</p>
        </div>

        <!-- Workshop -->
        <div class="col-lg-2 col-md-6 footer-links" style="flex: 1; min-width: 180px; margin-bottom: 20px;">
            <h4 style="font-size: 16px; font-weight: bold; margin-bottom: 10px;">Workshop</h4>
            <p style="margin: 0;">Bizpark Cakung, Blok 6 No. 56 & 58, Cakung Timur Jakarta Timur</p>
        </div>

        <!-- Administration -->
        <!-- <div class="col-lg-2 col-md-6 footer-links" style="flex: 1; min-width: 180px; margin-bottom: 20px;">
            <h4 style="font-size: 16px; font-weight: bold; margin-bottom: 10px;">Administration</h4>
            <p style="margin: 0;">Talavera Office Park, Lv. 28, DKI Jakarta</p>
        </div>
-->
        <!-- Other Pages -->
        <div class="col-lg-2 col-md-6 footer-links" style="flex: 1; min-width: 180px; margin-bottom: 20px;">
            <h4 style="font-size: 16px; font-weight: bold; margin-bottom: 10px;">Other Pages</h4>
            <ul style="list-style: none; padding: 0; margin: 0;">
                <li><a href="#about" style="color: white; text-decoration: none;">About Us</a></li>
                <li><a href="#product" style="color: white; text-decoration: none;">Product</a></li>
                <li><a href="web/detail/6" style="color: white; text-decoration: none;">Contact</a></li>
            </ul>
        </div>

        <!-- Stay Connected -->
        <div class="col-lg-3 col-md-6 footer-contact" style="flex: 1; min-width: 200px; margin-bottom: 20px;">
            <h4 style="font-size: 16px; font-weight: bold; margin-bottom: 10px;">Stay Connected</h4>
            <p style="margin: 0;">
                <a href="#" style="color: white; text-decoration: none; margin-right: 10px;">LinkedIn</a> 
                <a href="#" style="color: white; text-decoration: none; margin-right: 10px;">Email</a> 
                <a href="#" style="color: white; text-decoration: none; margin-right: 10px;">WhatsApp</a> 
                <a href="#" style="color: white; text-decoration: none;">Instagram</a>
                <br>
                <a href="mailto:sales@ctu-indonesia.com" class="email-link" style="color: white; text-decoration: none; margin-right: 10px;">Email: sales@ctu-indonesia.com</a>
                <br>
                Phone: 021 65302105
            </p>
        </div>

    </div>
</div>

<div class="container text-center" style="margin-top: 10px; border-top: 1px solid rgba(255, 255, 255, 0.3); padding-top: 10px;">
    <p style="margin: 0;">© 2024, PT Cipta Teknik Utama.</p>
</div>
</footer>

  <!-- Tiled Display / Wall Display -->
  <div id="popuppress-709" class="pps-popup  pps-has-border pps-w-640-px pps-h-auto-px  " data-popuppress="{" width ":" 640 "," width_units ":" px "," height ":" auto "," height_units ":" px "," auto_height ":" true "," position ":" absolute "," position_x ":" auto "," position_y ":" auto "," close_mouseleave ":" false "," class_run ":" "}">
    <div class="pps-wrap">
      <div class="pps-close"><a href="#" class="pps-close-link-709 pps-close-link" id="pps-close-link-709" title="Close"><i class="pps-icon pps-icon-close"></i></a></div>
      <div class="pps-content">
        <div class="pps-single-popup">
          <li class="pps-item-content">
            <div class="pps-content-wp-editor entry-content post-content">
              <p><img class="alignnone size-medium wp-image-1281 aligncenter" src="assets/doc//Vewell/Wall-Display.png" alt="LOGO" width="150" height="300"></p>
              <h3><b>Panel Parameters</b></h3>

              <table id="tablepress-4" class="tablepress tablepress-id-4">
                <tbody>
                  <tr class="row-1">
                    <td class="column-1">Aspec Ratio<br>
                    </td>
                    <td class="column-2">16:9</td>
                  </tr>
                  <tr class="row-2">
                    <td class="column-1">Backlight<br>
                    </td>
                    <td class="column-2">DLED<br>
                    </td>
                  </tr>
                  <tr class="row-3">
                    <td class="column-1">Resolution<br>
                    </td>
                    <td class="column-2">1920 x 1080</td>
                  </tr>
                  <tr class="row-4">
                    <td class="column-1">Display Color<br>
                    </td>
                    <td class="column-2">16.7M (8bit)</td>
                  </tr>
                  <tr class="row-5">
                    <td class="column-1">Brightness<br>
                    </td>
                    <td class="column-2">500 cd/m2</td>
                  </tr>
                  <tr class="row-6">
                    <td class="column-1">Visual Angle<br>
                    </td>
                    <td class="column-2">178 °C</td>
                  </tr>
                  <tr class="row-7">
                    <td class="column-1">Respond Time<br>
                    </td>
                    <td class="column-2">≤ 8ms</td>
                  </tr>
                  <tr class="row-8">
                    <td class="column-1">Service Life Time<br>
                    </td>
                    <td class="column-2">> 60.000 hour</td>
                  </tr>
                  <tr class="row-9">
                    <td class="column-1"></td>
                    <td class="column-2"></td>
                  </tr>
                </tbody>
              </table>

              <h3><b>Features</b></h3>
              <table id="tablepress-4" class="tablepress tablepress-id-4">
                <tbody>
                  <tr class="row-1">
                    <td class="column-1">Video System<br>
                    </td>
                    <td class="column-2">PAL / NTSC / SECAM</td>
                  </tr>
                  <tr class="row-2">
                    <td class="column-1">Language<br>
                    </td>
                    <td class="column-2">English, Chinese or other (Optional)<br>
                    </td>
                  </tr>
                  <tr class="row-3">
                    <td class="column-1">Operation Way<br>
                    </td>
                    <td class="column-2">Apps and Remote Control</td>
                  </tr>
                  <tr class="row-4">
                    <td class="column-1"></td>
                    <td class="column-2"></td>
                  </tr>

                </tbody>
              </table>

              <h3><b>Input and Output Interfaces Parameters</b></h3>
              <table id="tablepress-4" class="tablepress tablepress-id-4">
                <tbody>
                  <tr class="row-1">
                    <td class="column-1">D-15RGB (VGA)<br>
                    </td>
                    <td class="column-2">1</td>
                  </tr>
                  <tr class="row-2">
                    <td class="column-1">DVI<br>
                    </td>
                    <td class="column-2">1<br>
                    </td>
                  </tr>
                  <tr class="row-3">
                    <td class="column-1">HDMI<br>
                    </td>
                    <td class="column-2">1</td>
                  </tr>
                  <tr class="row-4">
                    <td class="column-1">Infrared Interfaces (IR)<br>
                    </td>
                    <td class="column-2">1</td>
                  </tr>
                  <tr class="row-5">
                    <td class="column-1">USB<br>
                    </td>
                    <td class="column-2">1</td>
                  </tr>
                  <tr class="row-6">
                    <td class="column-1">COM In<br>
                    </td>
                    <td class="column-2">1</td>
                  </tr>
                  <tr class="row-7">
                    <td class="column-1"></td>
                    <td class="column-2"></td>
                  </tr>
                </tbody>

              </table>
              <p style="text-align:center">For Details</p>
              <div style="text-align: center;">
                <span style="margin: 6px 0px;" class="separator transparent">
                  <a style="text-align:center" class="pps-btn pps-button-popup " title="Specification" onclick="window.location.href='assets/doc/Vewell/Brosur Vewell Tiled Video Wall.pdf'">Download Brosur</a>
                </span>
              </div>

              <!-- #tablepress-4 from cache -->
            </div>
          </li>
        </div>
      </div>
    </div>
    <!--.pps-wrap-->
  </div>

  <!--.pps-popup-->
  <style type="text/css">
    #popuppress-709 {
      width: 640px;
      height: auto;
      -webkit-border-radius: 7px;
      -moz-border-radius: 7px;
      border-radius: 7px;
      border: solid 8px rgba(0, 0, 0, 0.4);
    }

    #popuppress-709 .pps-wrap {
      padding: 15px 20px 15px 20px;
      background-color: #FFFFFF;
      -webkit-border-radius: 5px;
      -moz-border-radius: 5px;
      border-radius: 5px;
    }

    @media screen and (max-width: 600px) {
      #popuppress-709 .pps-wrap {
        padding: 0.6em;
      }
    }

    #popuppress-709 .pps-header {
      background-color: #FFFFFF;
      -moz-border-radius: 2px 2px 0px 0px;
      -webkit-border-radius: 2px 2px 0px 0px;
      border-radius: 2px 2px 0px 0px;
    }

    #popuppress-709 .pps-header h3 {
      margin-bottom: 10px;
      padding-top: 0px;
      padding-right: 0px;
      padding-bottom: 14px;
      padding-left: 0px;
      border-color: #EEEEEE;
      line-height: 1.4;
      font-size: 20px;
      color: #444444;
      text-align: left
    }

    #popuppress-709 .pps-content {
      padding: 0px;
    }

    #popuppress-709 .pps-iframe iframe {
      height: 460px;
    }

    #popuppress-709 .pps-pdf iframe {
      height: 460px;
    }

    #popuppress-709 .pps-embed iframe {
      width: 100%;
      height: 460px;
    }

    #popuppress-709 .pps-control-nav {
      bottom: -38px;
    }

    #popuppress-709 .pps-content,
    #popuppress-709 .pps-content p,
    #popuppress-709 .pps-content ul,
    #popuppress-709 .pps-content ol,
    #popuppress-709 .pps-content em,
    #popuppress-709 .pps-content span,
    #popuppress-709 .pps-content a {
      font-size: 16px;
      line-height: 1.6;
    }

    #popuppress-709 .pps-content h1 {
      font-size: 32px;
      line-height: 1.3;
      margin: 0.5em 0;
      padding: 0px;
    }

    #popuppress-709 .pps-content h2 {
      font-size: 27.2px;
      line-height: 1.3;
      margin: 0.4em 0;
      padding: 0px;
    }

    #popuppress-709 .pps-content h3 {
      font-size: 20.8px;
      line-height: 1.3;
      margin: 0.3em 0;
      padding: 0px;
    }

    /* Customize the button of the popup */

    a.pps-btn.pps-button-popup {
      color: #FFF;
      font-size: 15px;
      line-height: 50px;
      font-weight: 700;
      padding: 5px 20px 4px;
      font-family: Arial, Helvetica, sans-serif;
      background-color: #de3200;
      border-bottom: none;
      border-radius: 30px;
      text-transform: uppercase;
    }

    a.pps-btn.pps-button-popup:hover {
      background-color: #7a0001;
      border-color: #1B80C5;
      border-bottom: none;
    }

    /* Add additional styles */

    #popuppress-709.pps-popup.pps-has-border:before {
      top: -22px;
      right: -22px;
      width: 46px;
      height: 46px;
      -webkit-border-radius: 46px;
      -moz-border-radius: 46px;
      border-radius: 46px;
      background-color: rgba(0, 0, 0, 0.4);
    }

    #popuppress-709 .pps-close {
      position: absolute;
      top: -14px;
      right: -14px;
    }

    #popuppress-709 .pps-close a.pps-close-link {
      width: 18px;
      height: 18px;
      line-height: 1;
      background-color: #FFFFFF;
      -webkit-border-radius: 18px;
      -moz-border-radius: 18px;
      border-radius: 18px;
    }

    #popuppress-709 .pps-close a.pps-close-link i.pps-icon:before {
      font-size: 18px;
      line-height: 1;
      color: #999999
    }

    #popuppress-709 .pps-close a.pps-close-link:hover i.pps-icon:before {
      color: #222222
    }
  </style>


  <script type="text/javascript">
    jQuery(document).ready(function($) {

      jQuery(document).delegate(".pps-button-popup-709,a[href='pps-button-popup-709'],a[href='#pps-button-popup-709']", "click ", function(e) {
        e.preventDefault();

        startAtNum = (jQuery(this).hasClass("pps-button-thumb")) ? jQuery(this).attr("class").split(" ").pop().replace(/[^0-9\.]/g, "") : 0;
        pps_popup_709 = jQuery("#popuppress-709").bPopup({
          closeClass: "pps-close-link-709",
          easing: "swing",
          modalClose: true,
          modalColor: "#000000",
          opacity: 0.75,
          positionStyle: "absolute",
          position: ["auto", "auto"],
          speed: 300,
          transition: "fadeIn",
          zIndex: 99999,
          amsl: 0,
          escClose: true,
          follow: [true, true],
          scrollBar: true,
          onOpen: function() {
            manageSizeEmbedPopupPress(706, 460);
            manageSizeIframePopupPress(706, 460);
            manageSizePdfPopupPress(706, 460);
            setImageOverlayPopupPress(706, "");
            onOpenPopupPress(706);
            disclaimerPopupPress(706, "false", "same_page", "close_page", "false", "current_session", 1);
          },
          onClose: function() {
            onClosePopupPress(709);
          },
        }, function() {
          openedPopupPress(709);
        }); //end bPopup

      }); //end delegate

    });
  </script>

  <!-- Interactive Display -->
  <div id="popuppress-711" class="pps-popup  pps-has-border pps-w-640-px pps-h-auto-px  " data-popuppress="{" width ":" 640 "," width_units ":" px "," height ":" auto "," height_units ":" px "," auto_height ":" true "," position ":" absolute "," position_x ":" auto "," position_y ":" auto "," close_mouseleave ":" false "," class_run ":" "}">
    <div class="pps-wrap">
      <div class="pps-close"><a href="#" class="pps-close-link-711 pps-close-link" id="pps-close-link-711" title="Close"><i class="pps-icon pps-icon-close"></i></a></div>
      <div class="pps-content">
        <div class="pps-single-popup">
          <li class="pps-item-content">
            <div class="pps-content-wp-editor entry-content post-content">
              <p><img class="alignnone size-medium wp-image-1281 aligncenter" src="assets/doc//Vewell/Interactive-Display.png" alt="LOGO" width="127" height="300"></p>
              <h3><b>Display</b></h3>

              <table id="tablepress-4" class="tablepress tablepress-id-4">
                <tbody>
                  <tr class="row-1">
                    <td class="column-1">Display Ratio<br>
                    </td>
                    <td class="column-2">16:9</td>
                  </tr>
                  <tr class="row-2">
                    <td class="column-1">Backlight<br>
                    </td>
                    <td class="column-2">LED<br>
                    </td>
                  </tr>
                  <tr class="row-3">
                    <td class="column-1">Response Time<br>
                    </td>
                    <td class="column-2">4ms</td>
                  </tr>
                  <tr class="row-4">
                    <td class="column-1">Resolution<br>
                    </td>
                    <td class="column-2">3840(H)x 2160(V)</td>
                  </tr>
                  <tr class="row-5">
                    <td class="column-1">View Angle<br>
                    </td>
                    <td class="column-2">Horizontal 178°, Vertical 178° </td>
                  </tr>
                  <tr class="row-6">
                    <td class="column-1"></td>
                    <td class="column-2"></td>
                  </tr>
                </tbody>
              </table>

              <h3><b>Touch System</b></h3>
              <table id="tablepress-4" class="tablepress tablepress-id-4">
                <tbody>
                  <tr class="row-1">
                    <td class="column-1">Glass Material<br>
                    </td>
                    <td class="column-2">Anti-glare Toughened Glass</td>
                  </tr>
                  <tr class="row-2">
                    <td class="column-1">Sensing Type<br>
                    </td>
                    <td class="column-2">Infrared<br>
                    </td>
                  </tr>
                  <tr class="row-3">
                    <td class="column-1">Touch Point<br>
                    </td>
                    <td class="column-2">20 Points</td>
                  </tr>
                  <tr class="row-4">
                    <td class="column-1">Touch Mode<br>
                    </td>
                    <td class="column-2">Finger-Opaque Object (≥ 2mm)</td>
                  </tr>
                  <tr class="row-5">
                    <td class="column-1">Touch Accuracy<br>
                    </td>
                    <td class="column-2"> ± 1 mm</td>
                  </tr>
                  <tr class="row-6">
                    <td class="column-1"></td>
                    <td class="column-2"></td>
                  </tr>
                </tbody>
              </table>

              <h3><b>Camera</b></h3>
              <table id="tablepress-4" class="tablepress tablepress-id-4">
                <tbody>
                  <tr class="row-1">
                    <td class="column-1">Location<br>
                    </td>
                    <td class="column-2">Top x 1</td>
                  </tr>
                  <tr class="row-2">
                    <td class="column-1">Pixel<br>
                    </td>
                    <td class="column-2">8 - Megapixels<br>
                    </td>
                  </tr>
                  <tr class="row-3">
                    <td class="column-1">Automatic Control<br>
                    </td>
                    <td class="column-2">Automatic White Balance, Adaptive Ambient Brightness</td>
                  </tr>
                  <tr class="row-4">
                    <td class="column-1">Lens Distortion<br>
                    </td>
                    <td class="column-2">≤ 1%</td>
                  </tr>
                  <tr class="row-5">
                    <td class="column-1">Smart Switch<br>
                    </td>
                    <td class="column-2">Support</td>
                  </tr>
                  <tr class="row-6">
                    <td class="column-1">Face Recognition<br>
                    </td>
                    <td class="column-2">Support</td>
                  </tr>
                  <tr class="row-7">
                    <td class="column-1"></td>
                    <td class="column-2"></td>
                  </tr>
                </tbody>

              </table>
              <p style="text-align:center">For Details</p>
              <div style="text-align: center;">
                <span style="margin: 6px 0px;" class="separator transparent">
                  <a style="text-align:center" class="pps-btn pps-button-popup " title="Specification" onclick="window.location.href='assets/doc/Vewell/Brosur Vewell Interactive Display (Smartboard Conference).pdf'">Download Brosur</a>
                  <!-- <li style="text-align:center" ><a href="assets/doc/Vewell/Brosur Vewell Interactive Display (Smartboard Conference).pdf">Interactive Display</a></li> -->
                </span>
              </div>

              <!-- #tablepress-4 from cache -->
            </div>
          </li>
        </div>
      </div>
    </div>
    <!--.pps-wrap-->
  </div>

  <!--.pps-popup-->
  <style type="text/css">
    #popuppress-711 {
      width: 640px;
      height: auto;
      -webkit-border-radius: 7px;
      -moz-border-radius: 7px;
      border-radius: 7px;
      border: solid 8px rgba(0, 0, 0, 0.4);
    }

    #popuppress-711 .pps-wrap {
      padding: 15px 20px 15px 20px;
      background-color: #FFFFFF;
      -webkit-border-radius: 5px;
      -moz-border-radius: 5px;
      border-radius: 5px;
    }

    @media screen and (max-width: 600px) {
      #popuppress-711 .pps-wrap {
        padding: 0.6em;
      }
    }

    #popuppress-711 .pps-header {
      background-color: #FFFFFF;
      -moz-border-radius: 2px 2px 0px 0px;
      -webkit-border-radius: 2px 2px 0px 0px;
      border-radius: 2px 2px 0px 0px;
    }

    #popuppress-711 .pps-header h3 {
      margin-bottom: 10px;
      padding-top: 0px;
      padding-right: 0px;
      padding-bottom: 14px;
      padding-left: 0px;
      border-color: #EEEEEE;
      line-height: 1.4;
      font-size: 20px;
      color: #444444;
      text-align: left
    }

    #popuppress-711 .pps-content {
      padding: 0px;
    }

    #popuppress-711 .pps-iframe iframe {
      height: 460px;
    }

    #popuppress-711 .pps-pdf iframe {
      height: 460px;
    }

    #popuppress-711 .pps-embed iframe {
      width: 100%;
      height: 460px;
    }

    #popuppress-711 .pps-control-nav {
      bottom: -38px;
    }

    #popuppress-711 .pps-content,
    #popuppress-711 .pps-content p,
    #popuppress-711 .pps-content ul,
    #popuppress-711 .pps-content ol,
    #popuppress-711 .pps-content em,
    #popuppress-711 .pps-content span,
    #popuppress-711 .pps-content a {
      font-size: 16px;
      line-height: 1.6;
    }

    #popuppress-711 .pps-content h1 {
      font-size: 32px;
      line-height: 1.3;
      margin: 0.5em 0;
      padding: 0px;
    }

    #popuppress-711 .pps-content h2 {
      font-size: 27.2px;
      line-height: 1.3;
      margin: 0.4em 0;
      padding: 0px;
    }

    #popuppress-711 .pps-content h3 {
      font-size: 20.8px;
      line-height: 1.3;
      margin: 0.3em 0;
      padding: 0px;
    }

    /* Customize the button of the popup */

    a.pps-btn.pps-button-popup {
      color: #FFF;
      font-size: 15px;
      line-height: 50px;
      font-weight: 700;
      padding: 5px 20px 4px;
      font-family: Arial, Helvetica, sans-serif;
      background-color: #de3200;
      border-bottom: none;
      border-radius: 30px;
      text-transform: uppercase;
    }

    a.pps-btn.pps-button-popup:hover {
      background-color: #7a0001;
      border-color: #1B80C5;
      border-bottom: none;
    }

    /* Add additional styles */

    #popuppress-711.pps-popup.pps-has-border:before {
      top: -22px;
      right: -22px;
      width: 46px;
      height: 46px;
      -webkit-border-radius: 46px;
      -moz-border-radius: 46px;
      border-radius: 46px;
      background-color: rgba(0, 0, 0, 0.4);
    }

    #popuppress-711 .pps-close {
      position: absolute;
      top: -14px;
      right: -14px;
    }

    #popuppress-711 .pps-close a.pps-close-link {
      width: 18px;
      height: 18px;
      line-height: 1;
      background-color: #FFFFFF;
      -webkit-border-radius: 18px;
      -moz-border-radius: 18px;
      border-radius: 18px;
    }

    #popuppress-711 .pps-close a.pps-close-link i.pps-icon:before {
      font-size: 18px;
      line-height: 1;
      color: #999999
    }

    #popuppress-711 .pps-close a.pps-close-link:hover i.pps-icon:before {
      color: #222222
    }
  </style>


  <script type="text/javascript">
    jQuery(document).ready(function($) {

      jQuery(document).delegate(".pps-button-popup-711,a[href='pps-button-popup-711'],a[href='#pps-button-popup-711']", "click ", function(e) {
        e.preventDefault();

        startAtNum = (jQuery(this).hasClass("pps-button-thumb")) ? jQuery(this).attr("class").split(" ").pop().replace(/[^0-9\.]/g, "") : 0;
        pps_popup_711 = jQuery("#popuppress-711").bPopup({
          closeClass: "pps-close-link-711",
          easing: "swing",
          modalClose: true,
          modalColor: "#000000",
          opacity: 0.75,
          positionStyle: "absolute",
          position: ["auto", "auto"],
          speed: 300,
          transition: "fadeIn",
          zIndex: 99999,
          amsl: 0,
          escClose: true,
          follow: [true, true],
          scrollBar: true,
          onOpen: function() {
            manageSizeEmbedPopupPress(706, 460);
            manageSizeIframePopupPress(706, 460);
            manageSizePdfPopupPress(706, 460);
            setImageOverlayPopupPress(706, "");
            onOpenPopupPress(706);
            disclaimerPopupPress(706, "false", "same_page", "close_page", "false", "current_session", 1);
          },
          onClose: function() {
            onClosePopupPress(711);
          },
        }, function() {
          openedPopupPress(711);
        }); //end bPopup

      }); //end delegate

    });
  </script>

  <!-- Digital Signage/Kiosk -->
  <div id="popuppress-713" class="pps-popup  pps-has-border pps-w-640-px pps-h-auto-px  " data-popuppress="{" width ":" 640 "," width_units ":" px "," height ":" auto "," height_units ":" px "," auto_height ":" true "," position ":" absolute "," position_x ":" auto "," position_y ":" auto "," close_mouseleave ":" false "," class_run ":" "}">
    <div class="pps-wrap">
      <div class="pps-close"><a href="#" class="pps-close-link-713 pps-close-link" id="pps-close-link-713" title="Close"><i class="pps-icon pps-icon-close"></i></a></div>
      <div class="pps-content">
        <div class="pps-single-popup">
          <li class="pps-item-content">
            <div class="pps-content-wp-editor entry-content post-content">
              <p><img class="alignnone size-medium wp-image-1281 aligncenter" src="assets/doc//Vewell/Digital-Signage-Kiosk.png" alt="LOGO" width="127" height="300"></p>
              <h3><b>Technical Specification - VS-430</b></h3>

              <table id="tablepress-4" class="tablepress tablepress-id-4">
                <tbody>
                  <tr class="row-1">
                    <td class="column-1">Screen Size<br>
                    </td>
                    <td class="column-2">43"</td>
                  </tr>
                  <tr class="row-2">
                    <td class="column-1">Resolution<br>
                    </td>
                    <td class="column-2">FHD 1920 x 1080<br>
                    </td>
                  </tr>
                  <tr class="row-3">
                    <td class="column-1">Display Size (mm)<br>
                    </td>
                    <td class="column-2">970(H)x559(W)</td>
                  </tr>
                  <tr class="row-4">
                    <td class="column-1">Brightness (cd/m²)<br>
                    </td>
                    <td class="column-2">320</td>
                  </tr>
                  <tr class="row-5">
                    <td class="column-1">Aspect Ratio<br>
                    </td>
                    <td class="column-2">16:9</td>
                  </tr>
                  <tr class="row-6">
                    <td class="column-1">Contrast Ratio (typ.)<br>
                    </td>
                    <td class="column-2">5000:1</td>
                  </tr>
                  <tr class="row-7">
                    <td class="column-1">Input Power (Volt AC)<br>
                    </td>
                    <td class="column-2">110-220 V (50Hz-60Hz)</td>
                  </tr>
                  <tr class="row-8">
                    <td class="column-1">Work Temperature<br>
                    </td>
                    <td class="column-2">0-50 ˚C</td>
                  </tr>
                  <tr class="row-9">
                    <td class="column-1"></td>
                    <td class="column-2"></td>
                  </tr>
                </tbody>
              </table>

              <h3><b>Technical Specification - VS-430</b></h3>

              <table id="tablepress-4" class="tablepress tablepress-id-4">
                <tbody>
                  <tr class="row-1">
                    <td class="column-1">Screen Size<br>
                    </td>
                    <td class="column-2">55"</td>
                  </tr>
                  <tr class="row-2">
                    <td class="column-1">Resolution<br>
                    </td>
                    <td class="column-2">FHD 1920 x 1080<br>
                    </td>
                  </tr>
                  <tr class="row-3">
                    <td class="column-1">Display Size (mm)<br>
                    </td>
                    <td class="column-2">1239(H)x710(W)</td>
                  </tr>
                  <tr class="row-4">
                    <td class="column-1">Brightness (cd/m²)<br>
                    </td>
                    <td class="column-2">350</td>
                  </tr>
                  <tr class="row-5">
                    <td class="column-1">Aspect Ratio<br>
                    </td>
                    <td class="column-2">16:9</td>
                  </tr>
                  <tr class="row-6">
                    <td class="column-1">Contrast Ratio (typ.)<br>
                    </td>
                    <td class="column-2">5000:1</td>
                  </tr>
                  <tr class="row-7">
                    <td class="column-1">Input Power (Volt AC)<br>
                    </td>
                    <td class="column-2">110-220 V (50Hz-60Hz)</td>
                  </tr>
                  <tr class="row-8">
                    <td class="column-1">Work Temperature<br>
                    </td>
                    <td class="column-2">0-50 ˚C</td>
                  </tr>
                  <tr class="row-9">
                    <td class="column-1"></td>
                    <td class="column-2"></td>
                  </tr>
                </tbody>
              </table>
              <p style="text-align:center">For Details</p>
              <div style="text-align: center;">
                <span style="margin: 6px 0px;" class="separator transparent">
                  <a style="text-align:center" class="pps-btn pps-button-popup " title="Specification" onclick="window.location.href='assets/doc/Vewell/Kiosk Brochure CTU 2020.pdf'">Download Brosur</a>
                </span>
              </div>

              <!-- #tablepress-4 from cache -->
            </div>
          </li>
        </div>
      </div>
    </div>
    <!--.pps-wrap-->
  </div>

  <!--.pps-popup-->
  <style type="text/css">
    #popuppress-713 {
      width: 640px;
      height: auto;
      -webkit-border-radius: 7px;
      -moz-border-radius: 7px;
      border-radius: 7px;
      border: solid 8px rgba(0, 0, 0, 0.4);
    }

    #popuppress-713 .pps-wrap {
      padding: 15px 20px 15px 20px;
      background-color: #FFFFFF;
      -webkit-border-radius: 5px;
      -moz-border-radius: 5px;
      border-radius: 5px;
    }

    @media screen and (max-width: 600px) {
      #popuppress-713 .pps-wrap {
        padding: 0.6em;
      }
    }

    #popuppress-713 .pps-header {
      background-color: #FFFFFF;
      -moz-border-radius: 2px 2px 0px 0px;
      -webkit-border-radius: 2px 2px 0px 0px;
      border-radius: 2px 2px 0px 0px;
    }

    #popuppress-713 .pps-header h3 {
      margin-bottom: 10px;
      padding-top: 0px;
      padding-right: 0px;
      padding-bottom: 14px;
      padding-left: 0px;
      border-color: #EEEEEE;
      line-height: 1.4;
      font-size: 20px;
      color: #444444;
      text-align: left
    }

    #popuppress-713 .pps-content {
      padding: 0px;
    }

    #popuppress-713 .pps-iframe iframe {
      height: 460px;
    }

    #popuppress-713 .pps-pdf iframe {
      height: 460px;
    }

    #popuppress-713 .pps-embed iframe {
      width: 100%;
      height: 460px;
    }

    #popuppress-713 .pps-control-nav {
      bottom: -38px;
    }

    #popuppress-713 .pps-content,
    #popuppress-713 .pps-content p,
    #popuppress-713 .pps-content ul,
    #popuppress-713 .pps-content ol,
    #popuppress-713 .pps-content em,
    #popuppress-713 .pps-content span,
    #popuppress-713 .pps-content a {
      font-size: 16px;
      line-height: 1.6;
    }

    #popuppress-713 .pps-content h1 {
      font-size: 32px;
      line-height: 1.3;
      margin: 0.5em 0;
      padding: 0px;
    }

    #popuppress-713 .pps-content h2 {
      font-size: 27.2px;
      line-height: 1.3;
      margin: 0.4em 0;
      padding: 0px;
    }

    #popuppress-713 .pps-content h3 {
      font-size: 20.8px;
      line-height: 1.3;
      margin: 0.3em 0;
      padding: 0px;
    }

    /* Customize the button of the popup */

    a.pps-btn.pps-button-popup {
      color: #FFF;
      font-size: 15px;
      line-height: 50px;
      font-weight: 700;
      padding: 5px 20px 4px;
      font-family: Arial, Helvetica, sans-serif;
      background-color: #de3200;
      border-bottom: none;
      border-radius: 30px;
      text-transform: uppercase;
    }

    a.pps-btn.pps-button-popup:hover {
      background-color: #7a0001;
      border-color: #1B80C5;
      border-bottom: none;
    }

    /* Add additional styles */

    #popuppress-713.pps-popup.pps-has-border:before {
      top: -22px;
      right: -22px;
      width: 46px;
      height: 46px;
      -webkit-border-radius: 46px;
      -moz-border-radius: 46px;
      border-radius: 46px;
      background-color: rgba(0, 0, 0, 0.4);
    }

    #popuppress-713 .pps-close {
      position: absolute;
      top: -14px;
      right: -14px;
    }

    #popuppress-713 .pps-close a.pps-close-link {
      width: 18px;
      height: 18px;
      line-height: 1;
      background-color: #FFFFFF;
      -webkit-border-radius: 18px;
      -moz-border-radius: 18px;
      border-radius: 18px;
    }

    #popuppress-713 .pps-close a.pps-close-link i.pps-icon:before {
      font-size: 18px;
      line-height: 1;
      color: #999999
    }

    #popuppress-713 .pps-close a.pps-close-link:hover i.pps-icon:before {
      color: #222222
    }
  </style>


  <script type="text/javascript">
    jQuery(document).ready(function($) {

      jQuery(document).delegate(".pps-button-popup-713,a[href='pps-button-popup-713'],a[href='#pps-button-popup-713']", "click ", function(e) {
        e.preventDefault();

        startAtNum = (jQuery(this).hasClass("pps-button-thumb")) ? jQuery(this).attr("class").split(" ").pop().replace(/[^0-9\.]/g, "") : 0;
        pps_popup_713 = jQuery("#popuppress-713").bPopup({
          closeClass: "pps-close-link-713",
          easing: "swing",
          modalClose: true,
          modalColor: "#000000",
          opacity: 0.75,
          positionStyle: "absolute",
          position: ["auto", "auto"],
          speed: 300,
          transition: "fadeIn",
          zIndex: 99999,
          amsl: 0,
          escClose: true,
          follow: [true, true],
          scrollBar: true,
          onOpen: function() {
            manageSizeEmbedPopupPress(706, 460);
            manageSizeIframePopupPress(706, 460);
            manageSizePdfPopupPress(706, 460);
            setImageOverlayPopupPress(706, "");
            onOpenPopupPress(706);
            disclaimerPopupPress(706, "false", "same_page", "close_page", "false", "current_session", 1);
          },
          onClose: function() {
            onClosePopupPress(713);
          },
        }, function() {
          openedPopupPress(713);
        }); //end bPopup

      }); //end delegate

    });
  </script>

  <!-- LED Indoor -->
  <div id="popuppress-715" class="pps-popup  pps-has-border pps-w-640-px pps-h-auto-px  " data-popuppress="{" width ":" 640 "," width_units ":" px "," height ":" auto "," height_units ":" px "," auto_height ":" true "," position ":" absolute "," position_x ":" auto "," position_y ":" auto "," close_mouseleave ":" false "," class_run ":" "}">
    <div class="pps-wrap">
      <div class="pps-close"><a href="#" class="pps-close-link-715 pps-close-link" id="pps-close-link-715" title="Close"><i class="pps-icon pps-icon-close"></i></a></div>
      <div class="pps-content">
        <div class="pps-single-popup">
          <li class="pps-item-content">
            <div class="pps-content-wp-editor entry-content post-content">
              <!-- <p><img class="alignnone size-medium wp-image-1281 aligncenter" src="assets/doc//Vewell/Wall-Display.png" alt="LOGO" width="127" height="300"></p> -->
              <h3><b>Indoor Specification - Model Q1</b></h3>

              <table id="tablepress-4" class="tablepress tablepress-id-4">
                <tbody>
                  <tr class="row-1">
                    <td class="column-1">Scanning Mode<br>
                    </td>
                    <td class="column-2">1/40</td>
                  </tr>
                  <tr class="row-2">
                    <td class="column-1">Pixel Pitch (mm)<br>
                    </td>
                    <td class="column-2">1<br>
                    </td>
                  </tr>
                  <tr class="row-3">
                    <td class="column-1">Module Resolution<br>
                    </td>
                    <td class="column-2">320 x 160</td>
                  </tr>
                  <tr class="row-4">
                    <td class="column-1">Modul Size (mm)<br>
                    </td>
                    <td class="column-2">320 x 160</td>
                  </tr>
                  <tr class="row-5">
                    <td class="column-1">Pixel Density<br>
                    </td>
                    <td class="column-2">10000000</td>
                  </tr>
                  <tr class="row-6">
                    <td class="column-1">Module Weight (kg)<br>
                    </td>
                    <td class="column-2">0.5</td>
                  </tr>
                  <tr class="row-7">
                    <td class="column-1">Brightness (cd/m²)<br>
                    </td>
                    <td class="column-2">≥450</td>
                  </tr>
                  <tr class="row-8">
                    <td class="column-1">Power Consumtion (W/m²)<br>
                    </td>
                    <td class="column-2">≥791</td>
                  </tr>
                  <tr class="row-9">
                    <td class="column-1"></td>
                    <td class="column-2"></td>
                  </tr>
                </tbody>
              </table>

              <h3><b>Indoor Specification - Model Q3.0</b></h3>

              <table id="tablepress-4" class="tablepress tablepress-id-4">
                <tbody>
                  <tr class="row-1">
                    <td class="column-1">Scanning Mode<br>
                    </td>
                    <td class="column-2">1/26</td>
                  </tr>
                  <tr class="row-2">
                    <td class="column-1">Pixel Pitch (mm)<br>
                    </td>
                    <td class="column-2">3.076<br>
                    </td>
                  </tr>
                  <tr class="row-3">
                    <td class="column-1">Module Resolution<br>
                    </td>
                    <td class="column-2">104 x 52</td>
                  </tr>
                  <tr class="row-4">
                    <td class="column-1">Modul Size (mm)<br>
                    </td>
                    <td class="column-2">320 x 160</td>
                  </tr>
                  <tr class="row-5">
                    <td class="column-1">Pixel Density<br>
                    </td>
                    <td class="column-2">105625</td>
                  </tr>
                  <tr class="row-6">
                    <td class="column-1">Module Weight (kg)<br>
                    </td>
                    <td class="column-2">0.32</td>
                  </tr>
                  <tr class="row-7">
                    <td class="column-1">Brightness (cd/m²)<br>
                    </td>
                    <td class="column-2">≥450</td>
                  </tr>
                  <tr class="row-8">
                    <td class="column-1">Power Consumtion (W/m²)<br>
                    </td>
                    <td class="column-2">≥413</td>
                  </tr>
                  <tr class="row-9">
                    <td class="column-1"></td>
                    <td class="column-2"></td>
                  </tr>
                </tbody>
              </table>


              <p style="text-align:center">For Details</p>
              <div style="text-align: center;">
                <span style="margin: 6px 0px;" class="separator transparent">
                  <a style="text-align:center" class="pps-btn pps-button-popup " title="Specification" onclick="window.location.href='assets/doc/Vewell/Vewell Indoor Outdoor LED - 2021.pdf'">Download Brosur</a>
                </span>
              </div>

              <!-- #tablepress-4 from cache -->
            </div>
          </li>
        </div>
      </div>
    </div>
    <!--.pps-wrap-->
  </div>

  <!--.pps-popup-->
  <style type="text/css">
    #popuppress-715 {
      width: 640px;
      height: auto;
      -webkit-border-radius: 7px;
      -moz-border-radius: 7px;
      border-radius: 7px;
      border: solid 8px rgba(0, 0, 0, 0.4);
    }

    #popuppress-715 .pps-wrap {
      padding: 15px 20px 15px 20px;
      background-color: #FFFFFF;
      -webkit-border-radius: 5px;
      -moz-border-radius: 5px;
      border-radius: 5px;
    }

    @media screen and (max-width: 600px) {
      #popuppress-715 .pps-wrap {
        padding: 0.6em;
      }
    }

    #popuppress-715 .pps-header {
      background-color: #FFFFFF;
      -moz-border-radius: 2px 2px 0px 0px;
      -webkit-border-radius: 2px 2px 0px 0px;
      border-radius: 2px 2px 0px 0px;
    }

    #popuppress-715 .pps-header h3 {
      margin-bottom: 10px;
      padding-top: 0px;
      padding-right: 0px;
      padding-bottom: 14px;
      padding-left: 0px;
      border-color: #EEEEEE;
      line-height: 1.4;
      font-size: 20px;
      color: #444444;
      text-align: left
    }

    #popuppress-715 .pps-content {
      padding: 0px;
    }

    #popuppress-715 .pps-iframe iframe {
      height: 460px;
    }

    #popuppress-715 .pps-pdf iframe {
      height: 460px;
    }

    #popuppress-715 .pps-embed iframe {
      width: 100%;
      height: 460px;
    }

    #popuppress-715 .pps-control-nav {
      bottom: -38px;
    }

    #popuppress-715 .pps-content,
    #popuppress-715 .pps-content p,
    #popuppress-715 .pps-content ul,
    #popuppress-715 .pps-content ol,
    #popuppress-715 .pps-content em,
    #popuppress-715 .pps-content span,
    #popuppress-715 .pps-content a {
      font-size: 16px;
      line-height: 1.6;
    }

    #popuppress-715 .pps-content h1 {
      font-size: 32px;
      line-height: 1.3;
      margin: 0.5em 0;
      padding: 0px;
    }

    #popuppress-715 .pps-content h2 {
      font-size: 27.2px;
      line-height: 1.3;
      margin: 0.4em 0;
      padding: 0px;
    }

    #popuppress-715 .pps-content h3 {
      font-size: 20.8px;
      line-height: 1.3;
      margin: 0.3em 0;
      padding: 0px;
    }

    /* Customize the button of the popup */

    a.pps-btn.pps-button-popup {
      color: #FFF;
      font-size: 15px;
      line-height: 50px;
      font-weight: 700;
      padding: 5px 20px 4px;
      font-family: Arial, Helvetica, sans-serif;
      background-color: #de3200;
      border-bottom: none;
      border-radius: 30px;
      text-transform: uppercase;
    }

    a.pps-btn.pps-button-popup:hover {
      background-color: #7a0001;
      border-color: #1B80C5;
      border-bottom: none;
    }

    /* Add additional styles */

    #popuppress-715.pps-popup.pps-has-border:before {
      top: -22px;
      right: -22px;
      width: 46px;
      height: 46px;
      -webkit-border-radius: 46px;
      -moz-border-radius: 46px;
      border-radius: 46px;
      background-color: rgba(0, 0, 0, 0.4);
    }

    #popuppress-715 .pps-close {
      position: absolute;
      top: -14px;
      right: -14px;
    }

    #popuppress-715 .pps-close a.pps-close-link {
      width: 18px;
      height: 18px;
      line-height: 1;
      background-color: #FFFFFF;
      -webkit-border-radius: 18px;
      -moz-border-radius: 18px;
      border-radius: 18px;
    }

    #popuppress-715 .pps-close a.pps-close-link i.pps-icon:before {
      font-size: 18px;
      line-height: 1;
      color: #999999
    }

    #popuppress-715 .pps-close a.pps-close-link:hover i.pps-icon:before {
      color: #222222
    }
  </style>


  <script type="text/javascript">
    jQuery(document).ready(function($) {

      jQuery(document).delegate(".pps-button-popup-715,a[href='pps-button-popup-715'],a[href='#pps-button-popup-715']", "click ", function(e) {
        e.preventDefault();

        startAtNum = (jQuery(this).hasClass("pps-button-thumb")) ? jQuery(this).attr("class").split(" ").pop().replace(/[^0-9\.]/g, "") : 0;
        pps_popup_715 = jQuery("#popuppress-715").bPopup({
          closeClass: "pps-close-link-715",
          easing: "swing",
          modalClose: true,
          modalColor: "#000000",
          opacity: 0.75,
          positionStyle: "absolute",
          position: ["auto", "auto"],
          speed: 300,
          transition: "fadeIn",
          zIndex: 99999,
          amsl: 0,
          escClose: true,
          follow: [true, true],
          scrollBar: true,
          onOpen: function() {
            manageSizeEmbedPopupPress(706, 460);
            manageSizeIframePopupPress(706, 460);
            manageSizePdfPopupPress(706, 460);
            setImageOverlayPopupPress(706, "");
            onOpenPopupPress(706);
            disclaimerPopupPress(706, "false", "same_page", "close_page", "false", "current_session", 1);
          },
          onClose: function() {
            onClosePopupPress(715);
          },
        }, function() {
          openedPopupPress(715);
        }); //end bPopup

      }); //end delegate

    });
  </script>

  <!-- LED Outdoor -->
  <div id="popuppress-717" class="pps-popup  pps-has-border pps-w-640-px pps-h-auto-px  " data-popuppress="{" width ":" 640 "," width_units ":" px "," height ":" auto "," height_units ":" px "," auto_height ":" true "," position ":" absolute "," position_x ":" auto "," position_y ":" auto "," close_mouseleave ":" false "," class_run ":" "}">
    <div class="pps-wrap">
      <div class="pps-close"><a href="#" class="pps-close-link-717 pps-close-link" id="pps-close-link-717" title="Close"><i class="pps-icon pps-icon-close"></i></a></div>
      <div class="pps-content">
        <div class="pps-single-popup">
          <li class="pps-item-content">
            <div class="pps-content-wp-editor entry-content post-content">
              <!-- <p><img class="alignnone size-medium wp-image-1281 aligncenter" src="assets/doc//Vewell/Wall-Display.png" alt="LOGO" width="127" height="300"></p> -->

              <h3><b>Outdoor Specification - Model S5</b></h3>
              <table id="tablepress-4" class="tablepress tablepress-id-4">
                <tbody>
                  <tr class="row-1">
                    <td class="column-1">Scanning Mode<br>
                    </td>
                    <td class="column-2">1/8</td>
                  </tr>
                  <tr class="row-2">
                    <td class="column-1">Pixel Pitch (mm)<br>
                    </td>
                    <td class="column-2">5<br>
                    </td>
                  </tr>
                  <tr class="row-3">
                    <td class="column-1">Module Resolution<br>
                    </td>
                    <td class="column-2">64 x 32</td>
                  </tr>
                  <tr class="row-4">
                    <td class="column-1">Modul Size (mm)<br>
                    </td>
                    <td class="column-2">320 x 160</td>
                  </tr>
                  <tr class="row-5">
                    <td class="column-1">Pixel Density<br>
                    </td>
                    <td class="column-2">40000</td>
                  </tr>
                  <tr class="row-6">
                    <td class="column-1">Module Weight (kg)<br>
                    </td>
                    <td class="column-2">0.49</td>
                  </tr>
                  <tr class="row-7">
                    <td class="column-1">Brightness (cd/m²)<br>
                    </td>
                    <td class="column-2">≥6000</td>
                  </tr>
                  <tr class="row-8">
                    <td class="column-1">Power Consumtion (W/m²)<br>
                    </td>
                    <td class="column-2">≤836</td>
                  </tr>
                  <tr class="row-9">
                    <td class="column-1"></td>
                    <td class="column-2"></td>
                  </tr>
                </tbody>
              </table>

              <h3><b>Outdoor Specification - Model S10</b></h3>
              <table id="tablepress-4" class="tablepress tablepress-id-4">
                <tbody>
                  <tr class="row-1">
                    <td class="column-1">Scanning Mode<br>
                    </td>
                    <td class="column-2">1/2</td>
                  </tr>
                  <tr class="row-2">
                    <td class="column-1">Pixel Pitch (mm)<br>
                    </td>
                    <td class="column-2">10<br>
                    </td>
                  </tr>
                  <tr class="row-3">
                    <td class="column-1">Module Resolution<br>
                    </td>
                    <td class="column-2">32 x 16</td>
                  </tr>
                  <tr class="row-4">
                    <td class="column-1">Modul Size (mm)<br>
                    </td>
                    <td class="column-2">320 x 160</td>
                  </tr>
                  <tr class="row-5">
                    <td class="column-1">Pixel Density<br>
                    </td>
                    <td class="column-2">10000</td>
                  </tr>
                  <tr class="row-6">
                    <td class="column-1">Module Weight (kg)<br>
                    </td>
                    <td class="column-2">0.48</td>
                  </tr>
                  <tr class="row-7">
                    <td class="column-1">Brightness (cd/m²)<br>
                    </td>
                    <td class="column-2">≥6000</td>
                  </tr>
                  <tr class="row-8">
                    <td class="column-1">Power Consumtion (W/m²)<br>
                    </td>
                    <td class="column-2">≤413</td>
                  </tr>
                  <tr class="row-9">
                    <td class="column-1"></td>
                    <td class="column-2"></td>
                  </tr>
                </tbody>
              </table>


              <p style="text-align:center">For Details</p>
              <div style="text-align: center;">
                <span style="margin: 6px 0px;" class="separator transparent">
                  <a style="text-align:center" class="pps-btn pps-button-popup " title="Specification" onclick="window.location.href='assets/doc/Vewell/Vewell Indoor Outdoor LED - 2021.pdf'">Download Brosur</a>
                </span>
              </div>

              <!-- #tablepress-4 from cache -->
            </div>
          </li>
        </div>
      </div>
    </div>
    <!--.pps-wrap-->
  </div>

  <!--.pps-popup-->
  <style type="text/css">
    #popuppress-717 {
      width: 640px;
      height: auto;
      -webkit-border-radius: 7px;
      -moz-border-radius: 7px;
      border-radius: 7px;
      border: solid 8px rgba(0, 0, 0, 0.4);
    }

    #popuppress-717 .pps-wrap {
      padding: 15px 20px 15px 20px;
      background-color: #FFFFFF;
      -webkit-border-radius: 5px;
      -moz-border-radius: 5px;
      border-radius: 5px;
    }

    @media screen and (max-width: 600px) {
      #popuppress-717 .pps-wrap {
        padding: 0.6em;
      }
    }

    #popuppress-717 .pps-header {
      background-color: #FFFFFF;
      -moz-border-radius: 2px 2px 0px 0px;
      -webkit-border-radius: 2px 2px 0px 0px;
      border-radius: 2px 2px 0px 0px;
    }

    #popuppress-717 .pps-header h3 {
      margin-bottom: 10px;
      padding-top: 0px;
      padding-right: 0px;
      padding-bottom: 14px;
      padding-left: 0px;
      border-color: #EEEEEE;
      line-height: 1.4;
      font-size: 20px;
      color: #444444;
      text-align: left
    }

    #popuppress-717 .pps-content {
      padding: 0px;
    }

    #popuppress-717 .pps-iframe iframe {
      height: 460px;
    }

    #popuppress-717 .pps-pdf iframe {
      height: 460px;
    }

    #popuppress-717 .pps-embed iframe {
      width: 100%;
      height: 460px;
    }

    #popuppress-717 .pps-control-nav {
      bottom: -38px;
    }

    #popuppress-717 .pps-content,
    #popuppress-717 .pps-content p,
    #popuppress-717 .pps-content ul,
    #popuppress-717 .pps-content ol,
    #popuppress-717 .pps-content em,
    #popuppress-717 .pps-content span,
    #popuppress-717 .pps-content a {
      font-size: 16px;
      line-height: 1.6;
    }

    #popuppress-717 .pps-content h1 {
      font-size: 32px;
      line-height: 1.3;
      margin: 0.5em 0;
      padding: 0px;
    }

    #popuppress-717 .pps-content h2 {
      font-size: 27.2px;
      line-height: 1.3;
      margin: 0.4em 0;
      padding: 0px;
    }

    #popuppress-717 .pps-content h3 {
      font-size: 20.8px;
      line-height: 1.3;
      margin: 0.3em 0;
      padding: 0px;
    }

    /* Customize the button of the popup */

    a.pps-btn.pps-button-popup {
      color: #FFF;
      font-size: 15px;
      line-height: 50px;
      font-weight: 700;
      padding: 5px 20px 4px;
      font-family: Arial, Helvetica, sans-serif;
      background-color: #de3200;
      border-bottom: none;
      border-radius: 30px;
      text-transform: uppercase;
    }

    a.pps-btn.pps-button-popup:hover {
      background-color: #7a0001;
      border-color: #1B80C5;
      border-bottom: none;
    }

    /* Add additional styles */

    #popuppress-717.pps-popup.pps-has-border:before {
      top: -22px;
      right: -22px;
      width: 46px;
      height: 46px;
      -webkit-border-radius: 46px;
      -moz-border-radius: 46px;
      border-radius: 46px;
      background-color: rgba(0, 0, 0, 0.4);
    }

    #popuppress-717 .pps-close {
      position: absolute;
      top: -14px;
      right: -14px;
    }

    #popuppress-717 .pps-close a.pps-close-link {
      width: 18px;
      height: 18px;
      line-height: 1;
      background-color: #FFFFFF;
      -webkit-border-radius: 18px;
      -moz-border-radius: 18px;
      border-radius: 18px;
    }

    #popuppress-717 .pps-close a.pps-close-link i.pps-icon:before {
      font-size: 18px;
      line-height: 1;
      color: #999999
    }

    #popuppress-717 .pps-close a.pps-close-link:hover i.pps-icon:before {
      color: #222222
    }
  </style>


  <script type="text/javascript">
    jQuery(document).ready(function($) {

      jQuery(document).delegate(".pps-button-popup-717,a[href='pps-button-popup-717'],a[href='#pps-button-popup-717']", "click ", function(e) {
        e.preventDefault();

        startAtNum = (jQuery(this).hasClass("pps-button-thumb")) ? jQuery(this).attr("class").split(" ").pop().replace(/[^0-9\.]/g, "") : 0;
        pps_popup_717 = jQuery("#popuppress-717").bPopup({
          closeClass: "pps-close-link-717",
          easing: "swing",
          modalClose: true,
          modalColor: "#000000",
          opacity: 0.75,
          positionStyle: "absolute",
          position: ["auto", "auto"],
          speed: 300,
          transition: "fadeIn",
          zIndex: 99999,
          amsl: 0,
          escClose: true,
          follow: [true, true],
          scrollBar: true,
          onOpen: function() {
            manageSizeEmbedPopupPress(706, 460);
            manageSizeIframePopupPress(706, 460);
            manageSizePdfPopupPress(706, 460);
            setImageOverlayPopupPress(706, "");
            onOpenPopupPress(706);
            disclaimerPopupPress(706, "false", "same_page", "close_page", "false", "current_session", 1);
          },
          onClose: function() {
            onClosePopupPress(717);
          },
        }, function() {
          openedPopupPress(717);
        }); //end bPopup

      }); //end delegate

    });
  </script>

  <!-- Multiviewer Processor -->
  <div id="popuppress-719" class="pps-popup  pps-has-border pps-w-640-px pps-h-auto-px  " data-popuppress="{" width ":" 640 "," width_units ":" px "," height ":" auto "," height_units ":" px "," auto_height ":" true "," position ":" absolute "," position_x ":" auto "," position_y ":" auto "," close_mouseleave ":" false "," class_run ":" "}">
    <div class="pps-wrap">
      <div class="pps-close"><a href="#" class="pps-close-link-719 pps-close-link" id="pps-close-link-719" title="Close"><i class="pps-icon pps-icon-close"></i></a></div>
      <div class="pps-content">
        <div class="pps-single-popup">
          <li class="pps-item-content">
            <div class="pps-content-wp-editor entry-content post-content">
              <p><img class="alignnone size-medium wp-image-1281 aligncenter" src="assets/doc/Vewell/Multiviewer Processor.png" alt="LOGO" width="300" height="300"></p>
              <h3><b>Technical Parameters</b></h3>

              <table id="tablepress-4" class="tablepress tablepress-id-4">
                <tbody>
                  <tr class="row-1">
                    <td class="column-1">Description<br>
                    </td>
                    <td class="column-2">Up to 4 video windows per display channel (optional)</td>
                  </tr>
                  <tr class="row-2">
                    <td class="column-1">Input Resolution<br>
                    </td>
                    <td class="column-2">1920x 1200/60Hz, 1080p, compatible of all standard resolutions and can be costumized<br>
                    </td>
                  </tr>
                  <tr class="row-3">
                    <td class="column-1">Output Resolution<br>
                    </td>
                    <td class="column-2">1920 x 1200/60Hz (compatible with standard resolution)</td>
                  </tr>
                  <tr class="row-4">
                    <td class="column-1">Power Supply<br>
                    </td>
                    <td class="column-2">Dual power supplies 100-240VAC, 50/60Hz, more trustable hot swappable power supply
                      working mode, internationally self-adaptive power</td>
                  </tr>
                  <tr class="row-5">
                    <td class="column-1">Working Temperature<br>
                    </td>
                    <td class="column-2">-20°C-60°C</td>
                  </tr>
                  <tr class="row-6">
                    <td class="column-1">Working Humidity<br>
                    </td>
                    <td class="column-2">5-95%</td>
                  </tr>
                  <tr class="row-7">
                    <td class="column-1">Baud Rate<br>
                    </td>
                    <td class="column-2">115200</td>
                  </tr>
                  <tr class="row-8">
                    <td class="column-1">Serial Port<br>
                    </td>
                    <td class="column-2">RS-232</td>
                  </tr>
                  <tr class="row-9">
                    <td class="column-1"></td>
                    <td class="column-2"></td>
                  </tr>
                </tbody>
              </table>


              <p style="text-align:center">For Details</p>
              <div style="text-align: center;">
                <span style="margin: 6px 0px;" class="separator transparent">
                  <a style="text-align:center" class="pps-btn pps-button-popup " title="Specification" onclick="window.location.href='assets/doc/Vewell/Brosur Vewell Multiviewer Processor.pdf'">Download Brosur</a>
                </span>
              </div>

              <!-- #tablepress-4 from cache -->
            </div>
          </li>
        </div>
      </div>
    </div>
    <!--.pps-wrap-->
  </div>

  <!--.pps-popup-->
  <style type="text/css">
    #popuppress-719 {
      width: 640px;
      height: auto;
      -webkit-border-radius: 7px;
      -moz-border-radius: 7px;
      border-radius: 7px;
      border: solid 8px rgba(0, 0, 0, 0.4);
    }

    #popuppress-719 .pps-wrap {
      padding: 15px 20px 15px 20px;
      background-color: #FFFFFF;
      -webkit-border-radius: 5px;
      -moz-border-radius: 5px;
      border-radius: 5px;
    }

    @media screen and (max-width: 600px) {
      #popuppress-719 .pps-wrap {
        padding: 0.6em;
      }
    }

    #popuppress-719 .pps-header {
      background-color: #FFFFFF;
      -moz-border-radius: 2px 2px 0px 0px;
      -webkit-border-radius: 2px 2px 0px 0px;
      border-radius: 2px 2px 0px 0px;
    }

    #popuppress-719 .pps-header h3 {
      margin-bottom: 10px;
      padding-top: 0px;
      padding-right: 0px;
      padding-bottom: 14px;
      padding-left: 0px;
      border-color: #EEEEEE;
      line-height: 1.4;
      font-size: 20px;
      color: #444444;
      text-align: left
    }

    #popuppress-719 .pps-content {
      padding: 0px;
    }

    #popuppress-719 .pps-iframe iframe {
      height: 460px;
    }

    #popuppress-719 .pps-pdf iframe {
      height: 460px;
    }

    #popuppress-719 .pps-embed iframe {
      width: 100%;
      height: 460px;
    }

    #popuppress-719 .pps-control-nav {
      bottom: -38px;
    }

    #popuppress-719 .pps-content,
    #popuppress-719 .pps-content p,
    #popuppress-719 .pps-content ul,
    #popuppress-719 .pps-content ol,
    #popuppress-719 .pps-content em,
    #popuppress-719 .pps-content span,
    #popuppress-719 .pps-content a {
      font-size: 16px;
      line-height: 1.6;
    }

    #popuppress-719 .pps-content h1 {
      font-size: 32px;
      line-height: 1.3;
      margin: 0.5em 0;
      padding: 0px;
    }

    #popuppress-719 .pps-content h2 {
      font-size: 27.2px;
      line-height: 1.3;
      margin: 0.4em 0;
      padding: 0px;
    }

    #popuppress-719 .pps-content h3 {
      font-size: 20.8px;
      line-height: 1.3;
      margin: 0.3em 0;
      padding: 0px;
    }

    /* Customize the button of the popup */

    a.pps-btn.pps-button-popup {
      color: #FFF;
      font-size: 15px;
      line-height: 50px;
      font-weight: 700;
      padding: 5px 20px 4px;
      font-family: Arial, Helvetica, sans-serif;
      background-color: #de3200;
      border-bottom: none;
      border-radius: 30px;
      text-transform: uppercase;
    }

    a.pps-btn.pps-button-popup:hover {
      background-color: #7a0001;
      border-color: #1B80C5;
      border-bottom: none;
    }

    /* Add additional styles */

    #popuppress-719.pps-popup.pps-has-border:before {
      top: -22px;
      right: -22px;
      width: 46px;
      height: 46px;
      -webkit-border-radius: 46px;
      -moz-border-radius: 46px;
      border-radius: 46px;
      background-color: rgba(0, 0, 0, 0.4);
    }

    #popuppress-719 .pps-close {
      position: absolute;
      top: -14px;
      right: -14px;
    }

    #popuppress-719 .pps-close a.pps-close-link {
      width: 18px;
      height: 18px;
      line-height: 1;
      background-color: #FFFFFF;
      -webkit-border-radius: 18px;
      -moz-border-radius: 18px;
      border-radius: 18px;
    }

    #popuppress-719 .pps-close a.pps-close-link i.pps-icon:before {
      font-size: 18px;
      line-height: 1;
      color: #999999
    }

    #popuppress-719 .pps-close a.pps-close-link:hover i.pps-icon:before {
      color: #222222
    }
  </style>


  <script type="text/javascript">
    jQuery(document).ready(function($) {

      jQuery(document).delegate(".pps-button-popup-719,a[href='pps-button-popup-719'],a[href='#pps-button-popup-719']", "click ", function(e) {
        e.preventDefault();

        startAtNum = (jQuery(this).hasClass("pps-button-thumb")) ? jQuery(this).attr("class").split(" ").pop().replace(/[^0-9\.]/g, "") : 0;
        pps_popup_719 = jQuery("#popuppress-719").bPopup({
          closeClass: "pps-close-link-719",
          easing: "swing",
          modalClose: true,
          modalColor: "#000000",
          opacity: 0.75,
          positionStyle: "absolute",
          position: ["auto", "auto"],
          speed: 300,
          transition: "fadeIn",
          zIndex: 99999,
          amsl: 0,
          escClose: true,
          follow: [true, true],
          scrollBar: true,
          onOpen: function() {
            manageSizeEmbedPopupPress(706, 460);
            manageSizeIframePopupPress(706, 460);
            manageSizePdfPopupPress(706, 460);
            setImageOverlayPopupPress(706, "");
            onOpenPopupPress(706);
            disclaimerPopupPress(706, "false", "same_page", "close_page", "false", "current_session", 1);
          },
          onClose: function() {
            onClosePopupPress(719);
          },
        }, function() {
          openedPopupPress(719);
        }); //end bPopup

      }); //end delegate

    });
  </script>

  <!-- Wireless Presentation -->
  <div id="popuppress-721" class="pps-popup  pps-has-border pps-w-640-px pps-h-auto-px  " data-popuppress="{" width ":" 640 "," width_units ":" px "," height ":" auto "," height_units ":" px "," auto_height ":" true "," position ":" absolute "," position_x ":" auto "," position_y ":" auto "," close_mouseleave ":" false "," class_run ":" "}">
    <div class="pps-wrap">
      <div class="pps-close"><a href="#" class="pps-close-link-721 pps-close-link" id="pps-close-link-721" title="Close"><i class="pps-icon pps-icon-close"></i></a></div>
      <div class="pps-content">
        <div class="pps-single-popup">
          <li class="pps-item-content">
            <div class="pps-content-wp-editor entry-content post-content">
              <p><img class="alignnone size-medium wp-image-1281 aligncenter" src="assets/doc/Vewell/Wireless-Presentation.png" alt="LOGO" width="300" height="300"></p>
              <h3><b>Technical Specification</b></h3>

              <table id="tablepress-4" class="tablepress tablepress-id-4">
                <tbody>
                  <tr class="row-1">
                    <td class="column-1">Operating System<br>
                    </td>
                    <td class="column-2">
                      Windows 7/8.1/10 32 & 64 bit <br>
                      WMAC OS X 10.9.10/10.11 <br>
                      Compatible with airplay function iOS9, OS X (10.10/10.11) <br>
                      Android 4.0 or higher (use app Allcast) <br>

                    </td>
                  </tr>
                  <tr class="row-2">
                    <td class="column-1"> Video Input Resolution <br>
                    </td>
                    <td class="column-2"> Up to 3840x2160<br>
                    </td>
                  </tr>
                  <tr class="row-3">
                    <td class="column-1">Frame rate<br>
                    </td>
                    <td class="column-2">
                      Up to 30 fps <br>
                      HDMI and VGA <br>
                    </td>
                  </tr>
                  <tr class="row-4">
                    <td class="column-1">Numbers of sources Simultaneous on screen<br>
                    </td>
                    <td class="column-2">2/4</td>
                  </tr>
                  <tr class="row-5">
                    <td class="column-1">Numbers of Simultaneous conections<br>
                    </td>
                    <td class="column-2">Maximum up to 16</td>
                  </tr>
                  <tr class="row-6">
                    <td class="column-1">Wireless Transmission Speed<br>
                    </td>
                    <td class="column-2">Up to 867Mbps</td>
                  </tr>
                  <tr class="row-7">
                    <td class="column-1">Wireless Transmission Protocol<br>
                    </td>
                    <td class="column-2">IEEE 802.11ac/801.11n</td>
                  </tr>
                  <tr class="row-8">
                    <td class="column-1">Wireless Encryption Protocol<br>
                    </td>
                    <td class="column-2">WPA2-SPK</td>
                  </tr>
                  <tr class="row-9">
                    <td class="column-1"></td>
                    <td class="column-2"></td>
                  </tr>
                </tbody>
              </table>


              <p style="text-align:center">For Details</p>
              <div style="text-align: center;">
                <span style="margin: 6px 0px;" class="separator transparent">
                  <a style="text-align:center" class="pps-btn pps-button-popup " title="Specification" onclick="window.location.href='assets/doc/Vewell/Brosur Vewell Wireless Presentation.pdf'">Download Brosur</a>
                </span>
              </div>

              <!-- #tablepress-4 from cache -->
            </div>
          </li>
        </div>
      </div>
    </div>
    <!--.pps-wrap-->
  </div>

  <!--.pps-popup-->
  <style type="text/css">
    #popuppress-721 {
      width: 640px;
      height: auto;
      -webkit-border-radius: 7px;
      -moz-border-radius: 7px;
      border-radius: 7px;
      border: solid 8px rgba(0, 0, 0, 0.4);
    }

    #popuppress-721 .pps-wrap {
      padding: 15px 20px 15px 20px;
      background-color: #FFFFFF;
      -webkit-border-radius: 5px;
      -moz-border-radius: 5px;
      border-radius: 5px;
    }

    @media screen and (max-width: 600px) {
      #popuppress-721 .pps-wrap {
        padding: 0.6em;
      }
    }

    #popuppress-721 .pps-header {
      background-color: #FFFFFF;
      -moz-border-radius: 2px 2px 0px 0px;
      -webkit-border-radius: 2px 2px 0px 0px;
      border-radius: 2px 2px 0px 0px;
    }

    #popuppress-721 .pps-header h3 {
      margin-bottom: 10px;
      padding-top: 0px;
      padding-right: 0px;
      padding-bottom: 14px;
      padding-left: 0px;
      border-color: #EEEEEE;
      line-height: 1.4;
      font-size: 20px;
      color: #444444;
      text-align: left
    }

    #popuppress-721 .pps-content {
      padding: 0px;
    }

    #popuppress-721 .pps-iframe iframe {
      height: 460px;
    }

    #popuppress-721 .pps-pdf iframe {
      height: 460px;
    }

    #popuppress-721 .pps-embed iframe {
      width: 100%;
      height: 460px;
    }

    #popuppress-721 .pps-control-nav {
      bottom: -38px;
    }

    #popuppress-721 .pps-content,
    #popuppress-721 .pps-content p,
    #popuppress-721 .pps-content ul,
    #popuppress-721 .pps-content ol,
    #popuppress-721 .pps-content em,
    #popuppress-721 .pps-content span,
    #popuppress-721 .pps-content a {
      font-size: 16px;
      line-height: 1.6;
    }

    #popuppress-721 .pps-content h1 {
      font-size: 32px;
      line-height: 1.3;
      margin: 0.5em 0;
      padding: 0px;
    }

    #popuppress-721 .pps-content h2 {
      font-size: 27.2px;
      line-height: 1.3;
      margin: 0.4em 0;
      padding: 0px;
    }

    #popuppress-721 .pps-content h3 {
      font-size: 20.8px;
      line-height: 1.3;
      margin: 0.3em 0;
      padding: 0px;
    }

    /* Customize the button of the popup */

    a.pps-btn.pps-button-popup {
      color: #FFF;
      font-size: 15px;
      line-height: 50px;
      font-weight: 700;
      padding: 5px 20px 4px;
      font-family: Arial, Helvetica, sans-serif;
      background-color: #de3200;
      border-bottom: none;
      border-radius: 30px;
      text-transform: uppercase;
    }

    a.pps-btn.pps-button-popup:hover {
      background-color: #7a0001;
      border-color: #1B80C5;
      border-bottom: none;
    }

    /* Add additional styles */

    #popuppress-721.pps-popup.pps-has-border:before {
      top: -22px;
      right: -22px;
      width: 46px;
      height: 46px;
      -webkit-border-radius: 46px;
      -moz-border-radius: 46px;
      border-radius: 46px;
      background-color: rgba(0, 0, 0, 0.4);
    }

    #popuppress-721 .pps-close {
      position: absolute;
      top: -14px;
      right: -14px;
    }

    #popuppress-721 .pps-close a.pps-close-link {
      width: 18px;
      height: 18px;
      line-height: 1;
      background-color: #FFFFFF;
      -webkit-border-radius: 18px;
      -moz-border-radius: 18px;
      border-radius: 18px;
    }

    #popuppress-721 .pps-close a.pps-close-link i.pps-icon:before {
      font-size: 18px;
      line-height: 1;
      color: #999999
    }

    #popuppress-721 .pps-close a.pps-close-link:hover i.pps-icon:before {
      color: #222222
    }
  </style>


  <script type="text/javascript">
    jQuery(document).ready(function($) {

      jQuery(document).delegate(".pps-button-popup-721,a[href='pps-button-popup-721'],a[href='#pps-button-popup-721']", "click ", function(e) {
        e.preventDefault();

        startAtNum = (jQuery(this).hasClass("pps-button-thumb")) ? jQuery(this).attr("class").split(" ").pop().replace(/[^0-9\.]/g, "") : 0;
        pps_popup_721 = jQuery("#popuppress-721").bPopup({
          closeClass: "pps-close-link-721",
          easing: "swing",
          modalClose: true,
          modalColor: "#000000",
          opacity: 0.75,
          positionStyle: "absolute",
          position: ["auto", "auto"],
          speed: 300,
          transition: "fadeIn",
          zIndex: 99999,
          amsl: 0,
          escClose: true,
          follow: [true, true],
          scrollBar: true,
          onOpen: function() {
            manageSizeEmbedPopupPress(706, 460);
            manageSizeIframePopupPress(706, 460);
            manageSizePdfPopupPress(706, 460);
            setImageOverlayPopupPress(706, "");
            onOpenPopupPress(706);
            disclaimerPopupPress(706, "false", "same_page", "close_page", "false", "current_session", 1);
          },
          onClose: function() {
            onClosePopupPress(721);
          },
        }, function() {
          openedPopupPress(721);
        }); //end bPopup

      }); //end delegate

    });
  </script>


  <!-- RugGear -->
  <div id="popuppress-723" class="pps-popup  pps-has-border pps-w-640-px pps-h-auto-px  " data-popuppress="{" width ":" 640 "," width_units ":" px "," height ":" auto "," height_units ":" px "," auto_height ":" true "," position ":" absolute "," position_x ":" auto "," position_y ":" auto "," close_mouseleave ":" false "," class_run ":" "}">
    <div class="pps-wrap">
      <div class="pps-close"><a href="#" class="pps-close-link-723 pps-close-link" id="pps-close-link-723" title="Close"><i class="pps-icon pps-icon-close"></i></a></div>
      <div class="pps-content">
        <div class="pps-single-popup">
          <li class="pps-item-content">
            <div class="pps-content-wp-editor entry-content post-content">
              <p><img class="alignnone size-medium wp-image-1281 aligncenter" src="assets/doc/Mobile Phone/rugGear.png" alt="LOGO" width="300" height="300"></p>
              <h3><b>Technical Specification</b></h3>

              <table id="tablepress-4" class="tablepress tablepress-id-4">
                <tbody>
                  <tr class="row-1">
                    <td class="column-1">System<br>
                    </td>
                    <td class="column-2">Android Pie 9 <br>
                    </td>
                  </tr>
                  <tr class="row-2">
                    <td class="column-1"> Battery <br>
                    </td>
                    <td class="column-2"> 4200 mAh Battery<br>
                    </td>
                  </tr>
                  <tr class="row-3">
                    <td class="column-1">Memory<br>
                    </td>
                    <td class="column-2">3GB RAM 32GB (support microSDHC up to 128GB) <br> </td>
                  </tr>
                  <tr class="row-4">
                    <td class="column-1">Cameras<br>
                    </td>
                    <td class="column-2">Camera 13 MP(rear) and 8 MP (front)</td>
                  </tr>
                  <tr class="row-5">
                    <td class="column-1"></td>
                    <td class="column-2"></td>
                  </tr>
                </tbody>
              </table>


              <p style="text-align:center">For Details</p>
              <div style="text-align: center;">
                <span style="margin: 6px 0px;" class="separator transparent">
                  <a style="text-align:center" class="pps-btn pps-button-popup " title="Specification" onclick="window.location.href='assets/doc/Mobile Phone/Brosur Ruggerar.pdf'">Download Brosur</a>
                </span>
              </div>

              <!-- #tablepress-4 from cache -->
            </div>
          </li>
        </div>
      </div>
    </div>
    <!--.pps-wrap-->
  </div>

  <!--.pps-popup-->
  <style type="text/css">
    #popuppress-723 {
      width: 640px;
      height: auto;
      -webkit-border-radius: 7px;
      -moz-border-radius: 7px;
      border-radius: 7px;
      border: solid 8px rgba(0, 0, 0, 0.4);
    }

    #popuppress-723 .pps-wrap {
      padding: 15px 20px 15px 20px;
      background-color: #FFFFFF;
      -webkit-border-radius: 5px;
      -moz-border-radius: 5px;
      border-radius: 5px;
    }

    @media screen and (max-width: 600px) {
      #popuppress-723 .pps-wrap {
        padding: 0.6em;
      }
    }

    #popuppress-723 .pps-header {
      background-color: #FFFFFF;
      -moz-border-radius: 2px 2px 0px 0px;
      -webkit-border-radius: 2px 2px 0px 0px;
      border-radius: 2px 2px 0px 0px;
    }

    #popuppress-723 .pps-header h3 {
      margin-bottom: 10px;
      padding-top: 0px;
      padding-right: 0px;
      padding-bottom: 14px;
      padding-left: 0px;
      border-color: #EEEEEE;
      line-height: 1.4;
      font-size: 20px;
      color: #444444;
      text-align: left
    }

    #popuppress-723 .pps-content {
      padding: 0px;
    }

    #popuppress-723 .pps-iframe iframe {
      height: 460px;
    }

    #popuppress-723 .pps-pdf iframe {
      height: 460px;
    }

    #popuppress-723 .pps-embed iframe {
      width: 100%;
      height: 460px;
    }

    #popuppress-723 .pps-control-nav {
      bottom: -38px;
    }

    #popuppress-723 .pps-content,
    #popuppress-723 .pps-content p,
    #popuppress-723 .pps-content ul,
    #popuppress-723 .pps-content ol,
    #popuppress-723 .pps-content em,
    #popuppress-723 .pps-content span,
    #popuppress-723 .pps-content a {
      font-size: 16px;
      line-height: 1.6;
    }

    #popuppress-723 .pps-content h1 {
      font-size: 32px;
      line-height: 1.3;
      margin: 0.5em 0;
      padding: 0px;
    }

    #popuppress-723 .pps-content h2 {
      font-size: 27.2px;
      line-height: 1.3;
      margin: 0.4em 0;
      padding: 0px;
    }

    #popuppress-723 .pps-content h3 {
      font-size: 20.8px;
      line-height: 1.3;
      margin: 0.3em 0;
      padding: 0px;
    }

    /* Customize the button of the popup */

    a.pps-btn.pps-button-popup {
      color: #FFF;
      font-size: 15px;
      line-height: 50px;
      font-weight: 700;
      padding: 5px 20px 4px;
      font-family: Arial, Helvetica, sans-serif;
      background-color: #de3200;
      border-bottom: none;
      border-radius: 30px;
      text-transform: uppercase;
    }

    a.pps-btn.pps-button-popup:hover {
      background-color: #7a0001;
      border-color: #1B80C5;
      border-bottom: none;
    }

    /* Add additional styles */

    #popuppress-723.pps-popup.pps-has-border:before {
      top: -22px;
      right: -22px;
      width: 46px;
      height: 46px;
      -webkit-border-radius: 46px;
      -moz-border-radius: 46px;
      border-radius: 46px;
      background-color: rgba(0, 0, 0, 0.4);
    }

    #popuppress-723 .pps-close {
      position: absolute;
      top: -14px;
      right: -14px;
    }

    #popuppress-723 .pps-close a.pps-close-link {
      width: 18px;
      height: 18px;
      line-height: 1;
      background-color: #FFFFFF;
      -webkit-border-radius: 18px;
      -moz-border-radius: 18px;
      border-radius: 18px;
    }

    #popuppress-723 .pps-close a.pps-close-link i.pps-icon:before {
      font-size: 18px;
      line-height: 1;
      color: #999999
    }

    #popuppress-723 .pps-close a.pps-close-link:hover i.pps-icon:before {
      color: #222222
    }
  </style>


  <script type="text/javascript">
    jQuery(document).ready(function($) {

      jQuery(document).delegate(".pps-button-popup-723,a[href='pps-button-popup-723'],a[href='#pps-button-popup-723']", "click ", function(e) {
        e.preventDefault();

        startAtNum = (jQuery(this).hasClass("pps-button-thumb")) ? jQuery(this).attr("class").split(" ").pop().replace(/[^0-9\.]/g, "") : 0;
        pps_popup_723 = jQuery("#popuppress-723").bPopup({
          closeClass: "pps-close-link-723",
          easing: "swing",
          modalClose: true,
          modalColor: "#000000",
          opacity: 0.75,
          positionStyle: "absolute",
          position: ["auto", "auto"],
          speed: 300,
          transition: "fadeIn",
          zIndex: 99999,
          amsl: 0,
          escClose: true,
          follow: [true, true],
          scrollBar: true,
          onOpen: function() {
            manageSizeEmbedPopupPress(706, 460);
            manageSizeIframePopupPress(706, 460);
            manageSizePdfPopupPress(706, 460);
            setImageOverlayPopupPress(706, "");
            onOpenPopupPress(706);
            disclaimerPopupPress(706, "false", "same_page", "close_page", "false", "current_session", 1);
          },
          onClose: function() {
            onClosePopupPress(723);
          },
        }, function() {
          openedPopupPress(723);
        }); //end bPopup

      }); //end delegate

    });
  </script>

  <!-- iSafe -->
  <div id="popuppress-725" class="pps-popup  pps-has-border pps-w-640-px pps-h-auto-px  " data-popuppress="{" width ":" 640 "," width_units ":" px "," height ":" auto "," height_units ":" px "," auto_height ":" true "," position ":" absolute "," position_x ":" auto "," position_y ":" auto "," close_mouseleave ":" false "," class_run ":" "}">
    <div class="pps-wrap">
      <div class="pps-close"><a href="#" class="pps-close-link-725 pps-close-link" id="pps-close-link-725" title="Close"><i class="pps-icon pps-icon-close"></i></a></div>
      <div class="pps-content">
        <div class="pps-single-popup">
          <li class="pps-item-content">
            <div class="pps-content-wp-editor entry-content post-content">
              <p><img class="alignnone size-medium wp-image-1281 aligncenter" src="assets/doc/Mobile Phone/iSafe.png" alt="LOGO" width="300" height="300"></p>
              <h3><b>Technical Specification</b></h3>

              <table id="tablepress-4" class="tablepress tablepress-id-4">
                <tbody>
                  <tr class="row-1">
                    <td class="column-1">System<br>
                    </td>
                    <td class="column-2">Android Pie 9 <br>
                    </td>
                  </tr>
                  <tr class="row-2">
                    <td class="column-1"> Battery <br>
                    </td>
                    <td class="column-2"> 3600 mAh battery, replaceable, 3,8V; 13,68Wh<br>
                    </td>
                  </tr>
                  <tr class="row-3">
                    <td class="column-1">Memory<br>
                    </td>
                    <td class="column-2">4 GB RAM , 64 GB internal memory <br> </td>
                  </tr>
                  <tr class="row-4">
                    <td class="column-1">Cameras<br>
                    </td>
                    <td class="column-2">Camera 13 MP(rear) and 5 MP (front)</td>
                  </tr>
                  <tr class="row-5">
                    <td class="column-1">Bluetooth<br>
                    </td>
                    <td class="column-2">Bluetooth® 5.0</td>
                  </tr>
                  <tr class="row-6">
                    <td class="column-1">WI-FI<br>
                    </td>
                    <td class="column-2">2,4GHz + 5GHz: IEEE 802.11a/ b/g/n/ac/e/k/r/h with max. 8 connections hotspot</td>
                  </tr>
                  <tr class="row-7">
                    <td class="column-1">NFC<br>
                    </td>
                    <td class="column-2">Support</td>
                  </tr>
                  <tr class="row-8">
                    <td class="column-1"></td>
                    <td class="column-2"></td>
                  </tr>
                </tbody>
              </table>


              <p style="text-align:center">For Details</p>
              <div style="text-align: center;">
                <span style="margin: 6px 0px;" class="separator transparent">
                  <a style="text-align:center" class="pps-btn pps-button-popup " title="Specification" onclick="window.location.href='assets/doc/Mobile Phone/Brosur i.safe.pdf'">Download Brosur</a>
                </span>
              </div>

              <!-- #tablepress-4 from cache -->
            </div>
          </li>
        </div>
      </div>
    </div>
    <!--.pps-wrap-->
  </div>

  <!--.pps-popup-->
  <style type="text/css">
    #popuppress-725 {
      width: 640px;
      height: auto;
      -webkit-border-radius: 7px;
      -moz-border-radius: 7px;
      border-radius: 7px;
      border: solid 8px rgba(0, 0, 0, 0.4);
    }

    #popuppress-725 .pps-wrap {
      padding: 15px 20px 15px 20px;
      background-color: #FFFFFF;
      -webkit-border-radius: 5px;
      -moz-border-radius: 5px;
      border-radius: 5px;
    }

    @media screen and (max-width: 600px) {
      #popuppress-725 .pps-wrap {
        padding: 0.6em;
      }
    }

    #popuppress-725 .pps-header {
      background-color: #FFFFFF;
      -moz-border-radius: 2px 2px 0px 0px;
      -webkit-border-radius: 2px 2px 0px 0px;
      border-radius: 2px 2px 0px 0px;
    }

    #popuppress-725 .pps-header h3 {
      margin-bottom: 10px;
      padding-top: 0px;
      padding-right: 0px;
      padding-bottom: 14px;
      padding-left: 0px;
      border-color: #EEEEEE;
      line-height: 1.4;
      font-size: 20px;
      color: #444444;
      text-align: left
    }

    #popuppress-725 .pps-content {
      padding: 0px;
    }

    #popuppress-725 .pps-iframe iframe {
      height: 460px;
    }

    #popuppress-725 .pps-pdf iframe {
      height: 460px;
    }

    #popuppress-725 .pps-embed iframe {
      width: 100%;
      height: 460px;
    }

    #popuppress-725 .pps-control-nav {
      bottom: -38px;
    }

    #popuppress-725 .pps-content,
    #popuppress-725 .pps-content p,
    #popuppress-725 .pps-content ul,
    #popuppress-725 .pps-content ol,
    #popuppress-725 .pps-content em,
    #popuppress-725 .pps-content span,
    #popuppress-725 .pps-content a {
      font-size: 16px;
      line-height: 1.6;
    }

    #popuppress-725 .pps-content h1 {
      font-size: 32px;
      line-height: 1.3;
      margin: 0.5em 0;
      padding: 0px;
    }

    #popuppress-725 .pps-content h2 {
      font-size: 27.2px;
      line-height: 1.3;
      margin: 0.4em 0;
      padding: 0px;
    }

    #popuppress-725 .pps-content h3 {
      font-size: 20.8px;
      line-height: 1.3;
      margin: 0.3em 0;
      padding: 0px;
    }

    /* Customize the button of the popup */

    a.pps-btn.pps-button-popup {
      color: #FFF;
      font-size: 15px;
      line-height: 50px;
      font-weight: 700;
      padding: 5px 20px 4px;
      font-family: Arial, Helvetica, sans-serif;
      background-color: #de3200;
      border-bottom: none;
      border-radius: 30px;
      text-transform: uppercase;
    }

    a.pps-btn.pps-button-popup:hover {
      background-color: #7a0001;
      border-color: #1B80C5;
      border-bottom: none;
    }

    /* Add additional styles */

    #popuppress-725.pps-popup.pps-has-border:before {
      top: -22px;
      right: -22px;
      width: 46px;
      height: 46px;
      -webkit-border-radius: 46px;
      -moz-border-radius: 46px;
      border-radius: 46px;
      background-color: rgba(0, 0, 0, 0.4);
    }

    #popuppress-725 .pps-close {
      position: absolute;
      top: -14px;
      right: -14px;
    }

    #popuppress-725 .pps-close a.pps-close-link {
      width: 18px;
      height: 18px;
      line-height: 1;
      background-color: #FFFFFF;
      -webkit-border-radius: 18px;
      -moz-border-radius: 18px;
      border-radius: 18px;
    }

    #popuppress-725 .pps-close a.pps-close-link i.pps-icon:before {
      font-size: 18px;
      line-height: 1;
      color: #999999
    }

    #popuppress-725 .pps-close a.pps-close-link:hover i.pps-icon:before {
      color: #222222
    }
  </style>


  <script type="text/javascript">
    jQuery(document).ready(function($) {

      jQuery(document).delegate(".pps-button-popup-725,a[href='pps-button-popup-725'],a[href='#pps-button-popup-725']", "click ", function(e) {
        e.preventDefault();

        startAtNum = (jQuery(this).hasClass("pps-button-thumb")) ? jQuery(this).attr("class").split(" ").pop().replace(/[^0-9\.]/g, "") : 0;
        pps_popup_725 = jQuery("#popuppress-725").bPopup({
          closeClass: "pps-close-link-725",
          easing: "swing",
          modalClose: true,
          modalColor: "#000000",
          opacity: 0.75,
          positionStyle: "absolute",
          position: ["auto", "auto"],
          speed: 300,
          transition: "fadeIn",
          zIndex: 99999,
          amsl: 0,
          escClose: true,
          follow: [true, true],
          scrollBar: true,
          onOpen: function() {
            manageSizeEmbedPopupPress(706, 460);
            manageSizeIframePopupPress(706, 460);
            manageSizePdfPopupPress(706, 460);
            setImageOverlayPopupPress(706, "");
            onOpenPopupPress(706);
            disclaimerPopupPress(706, "false", "same_page", "close_page", "false", "current_session", 1);
          },
          onClose: function() {
            onClosePopupPress(725);
          },
        }, function() {
          openedPopupPress(725);
        }); //end bPopup

      }); //end delegate

    });
  </script>

  <!-- Agille -->
  <div id="popuppress-727" class="pps-popup  pps-has-border pps-w-640-px pps-h-auto-px  " data-popuppress="{" width ":" 640 "," width_units ":" px "," height ":" auto "," height_units ":" px "," auto_height ":" true "," position ":" absolute "," position_x ":" auto "," position_y ":" auto "," close_mouseleave ":" false "," class_run ":" "}">
    <div class="pps-wrap">
      <div class="pps-close"><a href="#" class="pps-close-link-727 pps-close-link" id="pps-close-link-727" title="Close"><i class="pps-icon pps-icon-close"></i></a></div>
      <div class="pps-content">
        <div class="pps-single-popup">
          <li class="pps-item-content">
            <div class="pps-content-wp-editor entry-content post-content">
              <p><img class="alignnone size-medium wp-image-1281 aligncenter" src="assets/doc/Agille Mobile/AgilleMobile.png" alt="LOGO" width="300" height="300"></p>
              <h3><b>Technical Specification</b></h3>

              <table id="tablepress-4" class="tablepress tablepress-id-4">
                <tbody>
                  <tr class="row-1">
                    <td class="column-1">System<br>
                    </td>
                    <td class="column-2">Android 9.0 <br>
                    </td>
                  </tr>
                  <tr class="row-2">
                    <td class="column-1"> Size <br>
                    </td>
                    <td class="column-2"> 280*180*20.5mm<br>
                    </td>
                  </tr>
                  <tr class="row-2">
                    <td class="column-1"> Battery <br>
                    </td>
                    <td class="column-2"> 310000mAh Li-ion battery<br>
                    </td>
                  </tr>
                  <tr class="row-3">
                    <td class="column-1">Memory<br>
                    </td>
                    <td class="column-2">RAM 3GB, ROM 64GB<br> </td>
                  </tr>
                  <tr class="row-4">
                    <td class="column-1">Cameras<br>
                    </td>
                    <td class="column-2">Camera 13 MP(rear) and 5 MP (front)</td>
                  </tr>
                  <tr class="row-5">
                    <td class="column-1">Bluetooth<br>
                    </td>
                    <td class="column-2">4.2 class 1.5</td>
                  </tr>
                  <tr class="row-6">
                    <td class="column-1">WI-FI<br>
                    </td>
                    <td class="column-2">802.11(ac/b/g/n) dual band</td>
                  </tr>
                  <tr class="row-7">
                    <td class="column-1">NFC<br>
                    </td>
                    <td class="column-2">Support</td>
                  </tr>
                  <tr class="row-8">
                    <td class="column-1"></td>
                    <td class="column-2"></td>
                  </tr>
                </tbody>
              </table>


              <p style="text-align:center">For Details</p>
              <div style="text-align: center;">
                <span style="margin: 6px 0px;" class="separator transparent">
                  <a style="text-align:center" class="pps-btn pps-button-popup " title="Specification" onclick="window.location.href='assets/doc/Agille Mobile/Brosur Agille Mobile.pdf'">Download Brosur</a>
                </span>
              </div>

              <!-- #tablepress-4 from cache -->
            </div>
          </li>
        </div>
      </div>
    </div>
    <!--.pps-wrap-->
  </div>

  <!--.pps-popup-->
  <style type="text/css">
    #popuppress-727 {
      width: 640px;
      height: auto;
      -webkit-border-radius: 7px;
      -moz-border-radius: 7px;
      border-radius: 7px;
      border: solid 8px rgba(0, 0, 0, 0.4);
    }

    #popuppress-727 .pps-wrap {
      padding: 15px 20px 15px 20px;
      background-color: #FFFFFF;
      -webkit-border-radius: 5px;
      -moz-border-radius: 5px;
      border-radius: 5px;
    }

    @media screen and (max-width: 600px) {
      #popuppress-727 .pps-wrap {
        padding: 0.6em;
      }
    }

    #popuppress-727 .pps-header {
      background-color: #FFFFFF;
      -moz-border-radius: 2px 2px 0px 0px;
      -webkit-border-radius: 2px 2px 0px 0px;
      border-radius: 2px 2px 0px 0px;
    }

    #popuppress-727 .pps-header h3 {
      margin-bottom: 10px;
      padding-top: 0px;
      padding-right: 0px;
      padding-bottom: 14px;
      padding-left: 0px;
      border-color: #EEEEEE;
      line-height: 1.4;
      font-size: 20px;
      color: #444444;
      text-align: left
    }

    #popuppress-727 .pps-content {
      padding: 0px;
    }

    #popuppress-727 .pps-iframe iframe {
      height: 460px;
    }

    #popuppress-727 .pps-pdf iframe {
      height: 460px;
    }

    #popuppress-727 .pps-embed iframe {
      width: 100%;
      height: 460px;
    }

    #popuppress-727 .pps-control-nav {
      bottom: -38px;
    }

    #popuppress-727 .pps-content,
    #popuppress-727 .pps-content p,
    #popuppress-727 .pps-content ul,
    #popuppress-727 .pps-content ol,
    #popuppress-727 .pps-content em,
    #popuppress-727 .pps-content span,
    #popuppress-727 .pps-content a {
      font-size: 16px;
      line-height: 1.6;
    }

    #popuppress-727 .pps-content h1 {
      font-size: 32px;
      line-height: 1.3;
      margin: 0.5em 0;
      padding: 0px;
    }

    #popuppress-727 .pps-content h2 {
      font-size: 27.2px;
      line-height: 1.3;
      margin: 0.4em 0;
      padding: 0px;
    }

    #popuppress-727 .pps-content h3 {
      font-size: 20.8px;
      line-height: 1.3;
      margin: 0.3em 0;
      padding: 0px;
    }

    /* Customize the button of the popup */

    a.pps-btn.pps-button-popup {
      color: #FFF;
      font-size: 15px;
      line-height: 50px;
      font-weight: 700;
      padding: 5px 20px 4px;
      font-family: Arial, Helvetica, sans-serif;
      background-color: #de3200;
      border-bottom: none;
      border-radius: 30px;
      text-transform: uppercase;
    }

    a.pps-btn.pps-button-popup:hover {
      background-color: #7a0001;
      border-color: #1B80C5;
      border-bottom: none;
    }

    /* Add additional styles */

    #popuppress-727.pps-popup.pps-has-border:before {
      top: -22px;
      right: -22px;
      width: 46px;
      height: 46px;
      -webkit-border-radius: 46px;
      -moz-border-radius: 46px;
      border-radius: 46px;
      background-color: rgba(0, 0, 0, 0.4);
    }

    #popuppress-727 .pps-close {
      position: absolute;
      top: -14px;
      right: -14px;
    }

    #popuppress-727 .pps-close a.pps-close-link {
      width: 18px;
      height: 18px;
      line-height: 1;
      background-color: #FFFFFF;
      -webkit-border-radius: 18px;
      -moz-border-radius: 18px;
      border-radius: 18px;
    }

    #popuppress-727 .pps-close a.pps-close-link i.pps-icon:before {
      font-size: 18px;
      line-height: 1;
      color: #999999
    }

    #popuppress-727 .pps-close a.pps-close-link:hover i.pps-icon:before {
      color: #222222
    }
  </style>


  <script type="text/javascript">
    jQuery(document).ready(function($) {

      jQuery(document).delegate(".pps-button-popup-727,a[href='pps-button-popup-727'],a[href='#pps-button-popup-727']", "click ", function(e) {
        e.preventDefault();

        startAtNum = (jQuery(this).hasClass("pps-button-thumb")) ? jQuery(this).attr("class").split(" ").pop().replace(/[^0-9\.]/g, "") : 0;
        pps_popup_727 = jQuery("#popuppress-727").bPopup({
          closeClass: "pps-close-link-727",
          easing: "swing",
          modalClose: true,
          modalColor: "#000000",
          opacity: 0.75,
          positionStyle: "absolute",
          position: ["auto", "auto"],
          speed: 300,
          transition: "fadeIn",
          zIndex: 99999,
          amsl: 0,
          escClose: true,
          follow: [true, true],
          scrollBar: true,
          onOpen: function() {
            manageSizeEmbedPopupPress(706, 460);
            manageSizeIframePopupPress(706, 460);
            manageSizePdfPopupPress(706, 460);
            setImageOverlayPopupPress(706, "");
            onOpenPopupPress(706);
            disclaimerPopupPress(706, "false", "same_page", "close_page", "false", "current_session", 1);
          },
          onClose: function() {
            onClosePopupPress(727);
          },
        }, function() {
          openedPopupPress(727);
        }); //end bPopup

      }); //end delegate

    });
  </script>

  <!-- Bartec -->
  <div id="popuppress-729" class="pps-popup  pps-has-border pps-w-640-px pps-h-auto-px  " data-popuppress="{" width ":" 640 "," width_units ":" px "," height ":" auto "," height_units ":" px "," auto_height ":" true "," position ":" absolute "," position_x ":" auto "," position_y ":" auto "," close_mouseleave ":" false "," class_run ":" "}">
    <div class="pps-wrap">
      <div class="pps-close"><a href="#" class="pps-close-link-729 pps-close-link" id="pps-close-link-729" title="Close"><i class="pps-icon pps-icon-close"></i></a></div>
      <div class="pps-content">
        <div class="pps-single-popup">
          <li class="pps-item-content">
            <div class="pps-content-wp-editor entry-content post-content">
              <p><img class="alignnone size-medium wp-image-1281 aligncenter" src="assets/doc/Bartec/Bartec.png" alt="LOGO" width="300" height="300"></p>
              <h3><b>Technical Specification</b></h3>

              <table id="tablepress-4" class="tablepress tablepress-id-4">
                <tbody>
                  <tr class="row-1">
                    <td class="column-1">System<br>
                    </td>
                    <td class="column-2">Android 9.0 <br>
                    </td>
                  </tr>
                  <tr class="row-2">
                    <td class="column-1"> Size <br>
                    </td>
                    <td class="column-2"> 164 x 84 x 14.5 mm (6.4 x 3.3 x 0.57 inch)<br>
                    </td>
                  </tr>
                  <tr class="row-2">
                    <td class="column-1"> Battery <br>
                    </td>
                    <td class="column-2"> 3.200 mAh (Replaceable) Must only be changed and charged outside of potentially explosive atmosphere<br>
                    </td>
                  </tr>
                  <tr class="row-3">
                    <td class="column-1">Memory<br>
                    </td>
                    <td class="column-2">4 GB LPDDR4X<br> </td>
                  </tr>
                  <tr class="row-4">
                    <td class="column-1">Cameras<br>
                    </td>
                    <td class="column-2">Camera 12 MP(rear) and 8 MP (front)</td>
                  </tr>
                  <tr class="row-5">
                    <td class="column-1">Bluetooth<br>
                    </td>
                    <td class="column-2">Bluetooth 5.0 and BLE</td>
                  </tr>
                  <tr class="row-6">
                    <td class="column-1">WI-FI<br>
                    </td>
                    <td class="column-2">WiFi 5 (2.4/5 GHz 802.11a/b/g/n/ac)</td>
                  </tr>
                  <tr class="row-7">
                    <td class="column-1">NFC<br>
                    </td>
                    <td class="column-2">Support</td>
                  </tr>
                  <tr class="row-8">
                    <td class="column-1"></td>
                    <td class="column-2"></td>
                  </tr>
                </tbody>
              </table>


              <p style="text-align:center">For Details</p>
              <div style="text-align: center;">
                <span style="margin: 6px 0px;" class="separator transparent">
                  <a style="text-align:center" class="pps-btn pps-button-popup " title="Specification" onclick="window.location.href='assets/doc/Bartec/Brosur Bartec.pdf'">Download Brosur</a>
                </span>
              </div>

              <!-- #tablepress-4 from cache -->
            </div>
          </li>
        </div>
      </div>
    </div>
    <!--.pps-wrap-->
  </div>

  <!--.pps-popup-->
  <style type="text/css">
    #popuppress-729 {
      width: 640px;
      height: auto;
      -webkit-border-radius: 7px;
      -moz-border-radius: 7px;
      border-radius: 7px;
      border: solid 8px rgba(0, 0, 0, 0.4);
    }

    #popuppress-729 .pps-wrap {
      padding: 15px 20px 15px 20px;
      background-color: #FFFFFF;
      -webkit-border-radius: 5px;
      -moz-border-radius: 5px;
      border-radius: 5px;
    }

    @media screen and (max-width: 600px) {
      #popuppress-729 .pps-wrap {
        padding: 0.6em;
      }
    }

    #popuppress-729 .pps-header {
      background-color: #FFFFFF;
      -moz-border-radius: 2px 2px 0px 0px;
      -webkit-border-radius: 2px 2px 0px 0px;
      border-radius: 2px 2px 0px 0px;
    }

    #popuppress-729 .pps-header h3 {
      margin-bottom: 10px;
      padding-top: 0px;
      padding-right: 0px;
      padding-bottom: 14px;
      padding-left: 0px;
      border-color: #EEEEEE;
      line-height: 1.4;
      font-size: 20px;
      color: #444444;
      text-align: left
    }

    #popuppress-729 .pps-content {
      padding: 0px;
    }

    #popuppress-729 .pps-iframe iframe {
      height: 460px;
    }

    #popuppress-729 .pps-pdf iframe {
      height: 460px;
    }

    #popuppress-729 .pps-embed iframe {
      width: 100%;
      height: 460px;
    }

    #popuppress-729 .pps-control-nav {
      bottom: -38px;
    }

    #popuppress-729 .pps-content,
    #popuppress-729 .pps-content p,
    #popuppress-729 .pps-content ul,
    #popuppress-729 .pps-content ol,
    #popuppress-729 .pps-content em,
    #popuppress-729 .pps-content span,
    #popuppress-729 .pps-content a {
      font-size: 16px;
      line-height: 1.6;
    }

    #popuppress-729 .pps-content h1 {
      font-size: 32px;
      line-height: 1.3;
      margin: 0.5em 0;
      padding: 0px;
    }

    #popuppress-729 .pps-content h2 {
      font-size: 27.2px;
      line-height: 1.3;
      margin: 0.4em 0;
      padding: 0px;
    }

    #popuppress-729 .pps-content h3 {
      font-size: 20.8px;
      line-height: 1.3;
      margin: 0.3em 0;
      padding: 0px;
    }

    /* Customize the button of the popup */

    a.pps-btn.pps-button-popup {
      color: #FFF;
      font-size: 15px;
      line-height: 50px;
      font-weight: 700;
      padding: 5px 20px 4px;
      font-family: Arial, Helvetica, sans-serif;
      background-color: #de3200;
      border-bottom: none;
      border-radius: 30px;
      text-transform: uppercase;
    }

    a.pps-btn.pps-button-popup:hover {
      background-color: #7a0001;
      border-color: #1B80C5;
      border-bottom: none;
    }

    /* Add additional styles */

    #popuppress-729.pps-popup.pps-has-border:before {
      top: -22px;
      right: -22px;
      width: 46px;
      height: 46px;
      -webkit-border-radius: 46px;
      -moz-border-radius: 46px;
      border-radius: 46px;
      background-color: rgba(0, 0, 0, 0.4);
    }

    #popuppress-729 .pps-close {
      position: absolute;
      top: -14px;
      right: -14px;
    }

    #popuppress-729 .pps-close a.pps-close-link {
      width: 18px;
      height: 18px;
      line-height: 1;
      background-color: #FFFFFF;
      -webkit-border-radius: 18px;
      -moz-border-radius: 18px;
      border-radius: 18px;
    }

    #popuppress-729 .pps-close a.pps-close-link i.pps-icon:before {
      font-size: 18px;
      line-height: 1;
      color: #999999
    }

    #popuppress-729 .pps-close a.pps-close-link:hover i.pps-icon:before {
      color: #222222
    }
  </style>


  <script type="text/javascript">
    jQuery(document).ready(function($) {

      jQuery(document).delegate(".pps-button-popup-729,a[href='pps-button-popup-729'],a[href='#pps-button-popup-729']", "click ", function(e) {
        e.preventDefault();

        startAtNum = (jQuery(this).hasClass("pps-button-thumb")) ? jQuery(this).attr("class").split(" ").pop().replace(/[^0-9\.]/g, "") : 0;
        pps_popup_729 = jQuery("#popuppress-729").bPopup({
          closeClass: "pps-close-link-729",
          easing: "swing",
          modalClose: true,
          modalColor: "#000000",
          opacity: 0.75,
          positionStyle: "absolute",
          position: ["auto", "auto"],
          speed: 300,
          transition: "fadeIn",
          zIndex: 99999,
          amsl: 0,
          escClose: true,
          follow: [true, true],
          scrollBar: true,
          onOpen: function() {
            manageSizeEmbedPopupPress(706, 460);
            manageSizeIframePopupPress(706, 460);
            manageSizePdfPopupPress(706, 460);
            setImageOverlayPopupPress(706, "");
            onOpenPopupPress(706);
            disclaimerPopupPress(706, "false", "same_page", "close_page", "false", "current_session", 1);
          },
          onClose: function() {
            onClosePopupPress(729);
          },
        }, function() {
          openedPopupPress(729);
        }); //end bPopup

      }); //end delegate

    });
  </script>

  <!-- BLITZ Lightning Protection System -->
  <div id="popuppress-731" class="pps-popup  pps-has-border pps-w-640-px pps-h-auto-px  " data-popuppress="{" width ":" 640 "," width_units ":" px "," height ":" auto "," height_units ":" px "," auto_height ":" true "," position ":" absolute "," position_x ":" auto "," position_y ":" auto "," close_mouseleave ":" false "," class_run ":" "}">
    <div class="pps-wrap">
      <div class="pps-close"><a href="#" class="pps-close-link-731 pps-close-link" id="pps-close-link-731" title="Close"><i class="pps-icon pps-icon-close"></i></a></div>
      <div class="pps-content">
        <div class="pps-single-popup">
          <li class="pps-item-content">
            <div class="pps-content-wp-editor entry-content post-content">
              <p><img class="alignnone size-medium wp-image-1281 aligncenter" src="assets/doc/Blitz/Blitz-Lightning.png" alt="LOGO" width="300" height="300"></p>
              <h3><b>Technical Specification - Lightning Strike Counter BZ-2</b></h3>

              <table id="tablepress-4" class="tablepress tablepress-id-4">
                <tbody>
                  <tr class="row-1">
                    <td class="column-1">Power Supply<br>
                    </td>
                    <td class="column-2">9 V Battery Changeable <br>
                    </td>
                  </tr>
                  <tr class="row-2">
                    <td class="column-1"> Display Digit <br>
                    </td>
                    <td class="column-2"> 0 ~ 999 <br>
                    </td>
                  </tr>
                  <tr class="row-2">
                    <td class="column-1"> Min. Count Impuls <br>
                    </td>
                    <td class="column-2"> > 3kA (8/20 µs)<br>
                    </td>
                  </tr>
                  <tr class="row-3">
                    <td class="column-1">Date & Time Display<br>
                    </td>
                    <td class="column-2">Available Once Striken<br> </td>
                  </tr>
                  <tr class="row-4">
                    <td class="column-1">Installation width<br>
                    </td>
                    <td class="column-2">2 Standard Modular</td>
                  </tr>
                  <tr class="row-5">
                    <td class="column-1">Installation<br>
                    </td>
                    <td class="column-2">35mm Standard Rail (EN50022 / DIN 46277 - 3)</td>
                  </tr>
                  <tr class="row-6">
                    <td class="column-1">Enclosure<br>
                    </td>
                    <td class="column-2">Thermoplastic UL94-V-0</td>
                  </tr>
                  <tr class="row-7">
                    <td class="column-1"></td>
                    <td class="column-2"></td>
                  </tr>
                </tbody>
              </table>


              <p style="text-align:center">For Details</p>
              <div style="text-align: center;">
                <span style="margin: 6px 0px;" class="separator transparent">
                  <a style="text-align:center" class="pps-btn pps-button-popup " title="Specification" onclick="window.location.href='assets/doc/Blitz/Brosur Blitz.pdf'">Download Brosur</a>
                </span>
              </div>

              <!-- #tablepress-4 from cache -->
            </div>
          </li>
        </div>
      </div>
    </div>
    <!--.pps-wrap-->
  </div>

  <!--.pps-popup-->
  <style type="text/css">
    #popuppress-731 {
      width: 640px;
      height: auto;
      -webkit-border-radius: 7px;
      -moz-border-radius: 7px;
      border-radius: 7px;
      border: solid 8px rgba(0, 0, 0, 0.4);
    }

    #popuppress-731 .pps-wrap {
      padding: 15px 20px 15px 20px;
      background-color: #FFFFFF;
      -webkit-border-radius: 5px;
      -moz-border-radius: 5px;
      border-radius: 5px;
    }

    @media screen and (max-width: 600px) {
      #popuppress-731 .pps-wrap {
        padding: 0.6em;
      }
    }

    #popuppress-731 .pps-header {
      background-color: #FFFFFF;
      -moz-border-radius: 2px 2px 0px 0px;
      -webkit-border-radius: 2px 2px 0px 0px;
      border-radius: 2px 2px 0px 0px;
    }

    #popuppress-731 .pps-header h3 {
      margin-bottom: 10px;
      padding-top: 0px;
      padding-right: 0px;
      padding-bottom: 14px;
      padding-left: 0px;
      border-color: #EEEEEE;
      line-height: 1.4;
      font-size: 20px;
      color: #444444;
      text-align: left
    }

    #popuppress-731 .pps-content {
      padding: 0px;
    }

    #popuppress-731 .pps-iframe iframe {
      height: 460px;
    }

    #popuppress-731 .pps-pdf iframe {
      height: 460px;
    }

    #popuppress-731 .pps-embed iframe {
      width: 100%;
      height: 460px;
    }

    #popuppress-731 .pps-control-nav {
      bottom: -38px;
    }

    #popuppress-731 .pps-content,
    #popuppress-731 .pps-content p,
    #popuppress-731 .pps-content ul,
    #popuppress-731 .pps-content ol,
    #popuppress-731 .pps-content em,
    #popuppress-731 .pps-content span,
    #popuppress-731 .pps-content a {
      font-size: 16px;
      line-height: 1.6;
    }

    #popuppress-731 .pps-content h1 {
      font-size: 32px;
      line-height: 1.3;
      margin: 0.5em 0;
      padding: 0px;
    }

    #popuppress-731 .pps-content h2 {
      font-size: 27.2px;
      line-height: 1.3;
      margin: 0.4em 0;
      padding: 0px;
    }

    #popuppress-731 .pps-content h3 {
      font-size: 20.8px;
      line-height: 1.3;
      margin: 0.3em 0;
      padding: 0px;
    }

    /* Customize the button of the popup */

    a.pps-btn.pps-button-popup {
      color: #FFF;
      font-size: 15px;
      line-height: 50px;
      font-weight: 700;
      padding: 5px 20px 4px;
      font-family: Arial, Helvetica, sans-serif;
      background-color: #de3200;
      border-bottom: none;
      border-radius: 30px;
      text-transform: uppercase;
    }

    a.pps-btn.pps-button-popup:hover {
      background-color: #7a0001;
      border-color: #1B80C5;
      border-bottom: none;
    }

    /* Add additional styles */

    #popuppress-731.pps-popup.pps-has-border:before {
      top: -22px;
      right: -22px;
      width: 46px;
      height: 46px;
      -webkit-border-radius: 46px;
      -moz-border-radius: 46px;
      border-radius: 46px;
      background-color: rgba(0, 0, 0, 0.4);
    }

    #popuppress-731 .pps-close {
      position: absolute;
      top: -14px;
      right: -14px;
    }

    #popuppress-731 .pps-close a.pps-close-link {
      width: 18px;
      height: 18px;
      line-height: 1;
      background-color: #FFFFFF;
      -webkit-border-radius: 18px;
      -moz-border-radius: 18px;
      border-radius: 18px;
    }

    #popuppress-731 .pps-close a.pps-close-link i.pps-icon:before {
      font-size: 18px;
      line-height: 1;
      color: #999999
    }

    #popuppress-731 .pps-close a.pps-close-link:hover i.pps-icon:before {
      color: #222222
    }
  </style>

   


  <script type="text/javascript">
    jQuery(document).ready(function($) {

      jQuery(document).delegate(".pps-button-popup-731,a[href='pps-button-popup-731'],a[href='#pps-button-popup-731']", "click ", function(e) {
        e.preventDefault();

        startAtNum = (jQuery(this).hasClass("pps-button-thumb")) ? jQuery(this).attr("class").split(" ").pop().replace(/[^0-9\.]/g, "") : 0;
        pps_popup_731 = jQuery("#popuppress-731").bPopup({
          closeClass: "pps-close-link-731",
          easing: "swing",
          modalClose: true,
          modalColor: "#000000",
          opacity: 0.75,
          positionStyle: "absolute",
          position: ["auto", "auto"],
          speed: 300,
          transition: "fadeIn",
          zIndex: 99999,
          amsl: 0,
          escClose: true,
          follow: [true, true],
          scrollBar: true,
          onOpen: function() {
            manageSizeEmbedPopupPress(706, 460);
            manageSizeIframePopupPress(706, 460);
            manageSizePdfPopupPress(706, 460);
            setImageOverlayPopupPress(706, "");
            onOpenPopupPress(706);
            disclaimerPopupPress(706, "false", "same_page", "close_page", "false", "current_session", 1);
          },
          onClose: function() {
            onClosePopupPress(731);
          },
        }, function() {
          openedPopupPress(731);
        }); //end bPopup

      }); //end delegate

    });
  </script>

  <!-- Fireblock -->
  <div id="popuppress-733" class="pps-popup  pps-has-border pps-w-640-px pps-h-auto-px  " data-popuppress="{" width ":" 640 "," width_units ":" px "," height ":" auto "," height_units ":" px "," auto_height ":" true "," position ":" absolute "," position_x ":" auto "," position_y ":" auto "," close_mouseleave ":" false "," class_run ":" "}">
    <div class="pps-wrap">
      <div class="pps-close"><a href="#" class="pps-close-link-733 pps-close-link" id="pps-close-link-733" title="Close"><i class="pps-icon pps-icon-close"></i></a></div>
      <div class="pps-content">
        <div class="pps-single-popup">
          <li class="pps-item-content">
            <div class="pps-content-wp-editor entry-content post-content">
              <p><img class="alignnone size-medium wp-image-1281 aligncenter" src="assets/doc/Blitz/Blitz-Fireblock.png" alt="LOGO" width="300" height="300"></p>
              <h3><b>Technical Specification</b></h3>

              <table id="tablepress-4" class="tablepress tablepress-id-4">
                <tbody>
                  <tr class="row-1">
                    <td class="column-1">Isi<br>
                    </td>
                    <td class="column-2">Superfine Powder & Aerosol <br>
                    </td>
                  </tr>
                  <tr class="row-2">
                    <td class="column-1"> Luas Pemadaman <br>
                    </td>
                    <td class="column-2"> 1 meter kubik<br>
                    </td>
                  </tr>
                  <tr class="row-2">
                    <td class="column-1"> Masa berlaku <br>
                    </td>
                    <td class="column-2"> 5 Tahun<br>
                    </td>
                  </tr>
                  <tr class="row-3">
                    <td class="column-1">Temperatur Penyimpanan<br>
                    </td>
                    <td class="column-2">40 ˚C s/d 80 ˚C<br> </td>
                  </tr>
                  <tr class="row-4">
                    <td class="column-1">Berat Kotor<br>
                    </td>
                    <td class="column-2">500 gram</td>
                  </tr>
                  <tr class="row-5">
                    <td class="column-1">Berat Bersih<br>
                    </td>
                    <td class="column-2">150 gram</td>
                  </tr>
                  <tr class="row-6">
                    <td class="column-1"></td>
                    <td class="column-2"></td>
                  </tr>
                </tbody>
              </table>


              <p style="text-align:center">For Details</p>
              <div style="text-align: center;">
                <span style="margin: 6px 0px;" class="separator transparent">
                  <a style="text-align:center" class="pps-btn pps-button-popup " title="Specification" onclick="window.location.href='assets/doc/Blitz/Brosur Fireblock.pdf'">Download Brosur</a>
                </span>
              </div>

              <!-- #tablepress-4 from cache -->
            </div>
          </li>
        </div>
      </div>
    </div>
    <!--.pps-wrap-->
  </div>

  <!--.pps-popup-->
  <style type="text/css">
    #popuppress-733 {
      width: 640px;
      height: auto;
      -webkit-border-radius: 7px;
      -moz-border-radius: 7px;
      border-radius: 7px;
      border: solid 8px rgba(0, 0, 0, 0.4);
    }

    #popuppress-733 .pps-wrap {
      padding: 15px 20px 15px 20px;
      background-color: #FFFFFF;
      -webkit-border-radius: 5px;
      -moz-border-radius: 5px;
      border-radius: 5px;
    }

    @media screen and (max-width: 600px) {
      #popuppress-733 .pps-wrap {
        padding: 0.6em;
      }
    }

    #popuppress-733 .pps-header {
      background-color: #FFFFFF;
      -moz-border-radius: 2px 2px 0px 0px;
      -webkit-border-radius: 2px 2px 0px 0px;
      border-radius: 2px 2px 0px 0px;
    }

    #popuppress-733 .pps-header h3 {
      margin-bottom: 10px;
      padding-top: 0px;
      padding-right: 0px;
      padding-bottom: 14px;
      padding-left: 0px;
      border-color: #EEEEEE;
      line-height: 1.4;
      font-size: 20px;
      color: #444444;
      text-align: left
    }

    #popuppress-733 .pps-content {
      padding: 0px;
    }

    #popuppress-733 .pps-iframe iframe {
      height: 460px;
    }

    #popuppress-733 .pps-pdf iframe {
      height: 460px;
    }

    #popuppress-733 .pps-embed iframe {
      width: 100%;
      height: 460px;
    }

    #popuppress-733 .pps-control-nav {
      bottom: -38px;
    }

    #popuppress-733 .pps-content,
    #popuppress-733 .pps-content p,
    #popuppress-733 .pps-content ul,
    #popuppress-733 .pps-content ol,
    #popuppress-733 .pps-content em,
    #popuppress-733 .pps-content span,
    #popuppress-733 .pps-content a {
      font-size: 16px;
      line-height: 1.6;
    }

    #popuppress-733 .pps-content h1 {
      font-size: 32px;
      line-height: 1.3;
      margin: 0.5em 0;
      padding: 0px;
    }

    #popuppress-733 .pps-content h2 {
      font-size: 27.2px;
      line-height: 1.3;
      margin: 0.4em 0;
      padding: 0px;
    }

    #popuppress-733 .pps-content h3 {
      font-size: 20.8px;
      line-height: 1.3;
      margin: 0.3em 0;
      padding: 0px;
    }

    /* Customize the button of the popup */

    a.pps-btn.pps-button-popup {
      color: #FFF;
      font-size: 15px;
      line-height: 50px;
      font-weight: 700;
      padding: 5px 20px 4px;
      font-family: Arial, Helvetica, sans-serif;
      background-color: #de3200;
      border-bottom: none;
      border-radius: 30px;
      text-transform: uppercase;
    }

    a.pps-btn.pps-button-popup:hover {
      background-color: #7a0001;
      border-color: #1B80C5;
      border-bottom: none;
    }

    /* Add additional styles */

    #popuppress-733.pps-popup.pps-has-border:before {
      top: -22px;
      right: -22px;
      width: 46px;
      height: 46px;
      -webkit-border-radius: 46px;
      -moz-border-radius: 46px;
      border-radius: 46px;
      background-color: rgba(0, 0, 0, 0.4);
    }

    #popuppress-733 .pps-close {
      position: absolute;
      top: -14px;
      right: -14px;
    }

    #popuppress-733 .pps-close a.pps-close-link {
      width: 18px;
      height: 18px;
      line-height: 1;
      background-color: #FFFFFF;
      -webkit-border-radius: 18px;
      -moz-border-radius: 18px;
      border-radius: 18px;
    }

    #popuppress-733 .pps-close a.pps-close-link i.pps-icon:before {
      font-size: 18px;
      line-height: 1;
      color: #999999
    }

    #popuppress-733 .pps-close a.pps-close-link:hover i.pps-icon:before {
      color: #222222
    }
  </style>


  <script type="text/javascript">
    jQuery(document).ready(function($) {

      jQuery(document).delegate(".pps-button-popup-733,a[href='pps-button-popup-733'],a[href='#pps-button-popup-733']", "click ", function(e) {
        e.preventDefault();

        startAtNum = (jQuery(this).hasClass("pps-button-thumb")) ? jQuery(this).attr("class").split(" ").pop().replace(/[^0-9\.]/g, "") : 0;
        pps_popup_733 = jQuery("#popuppress-733").bPopup({
          closeClass: "pps-close-link-733",
          easing: "swing",
          modalClose: true,
          modalColor: "#000000",
          opacity: 0.75,
          positionStyle: "absolute",
          position: ["auto", "auto"],
          speed: 300,
          transition: "fadeIn",
          zIndex: 99999,
          amsl: 0,
          escClose: true,
          follow: [true, true],
          scrollBar: true,
          onOpen: function() {
            manageSizeEmbedPopupPress(706, 460);
            manageSizeIframePopupPress(706, 460);
            manageSizePdfPopupPress(706, 460);
            setImageOverlayPopupPress(706, "");
            onOpenPopupPress(706);
            disclaimerPopupPress(706, "false", "same_page", "close_page", "false", "current_session", 1);
          },
          onClose: function() {
            onClosePopupPress(733);
          },
        }, function() {
          openedPopupPress(733);
        }); //end bPopup

      }); //end delegate

    });
  </script>

  <!-- I.X. R2 Security -->
  <div id="popuppress-735" class="pps-popup  pps-has-border pps-w-640-px pps-h-auto-px  " data-popuppress="{" width ":" 640 "," width_units ":" px "," height ":" auto "," height_units ":" px "," auto_height ":" true "," position ":" absolute "," position_x ":" auto "," position_y ":" auto "," close_mouseleave ":" false "," class_run ":" "}">
    <div class="pps-wrap">
      <div class="pps-close"><a href="#" class="pps-close-link-735 pps-close-link" id="pps-close-link-735" title="Close"><i class="pps-icon pps-icon-close"></i></a></div>
      <div class="pps-content">
        <div class="pps-single-popup">
          <li class="pps-item-content">
            <div class="pps-content-wp-editor entry-content post-content">
              <p><img class="alignnone size-medium wp-image-1281 aligncenter" src="assets/doc/IX/I.X.-R2.png" alt="LOGO" width="300" height="300"></p>
              <h3><b>Minimum Requirements</b></h3>

              <table id="tablepress-4" class="tablepress tablepress-id-4">
                <tbody>
                  <tr class="row-1">
                    <td class="column-1">System<br>
                    </td>
                    <td class="column-2">Android 6.0 or iOS 10.3 <br>
                    </td>
                  </tr>
                  <tr class="row-2">
                    <td class="column-1"> Bluetooth <br>
                    </td>
                    <td class="column-2"> BLE 4.1<br>
                    </td>
                  </tr>
                  <tr class="row-2">
                    <td class="column-1"> Battery <br>
                    </td>
                    <td class="column-2"> Battery life 5 days<br>
                    </td>
                  </tr>
                  <tr class="row-3">
                    <td class="column-1">Includes<br>
                    </td>
                    <td class="column-2">Charging docs and cable<br> </td>
                  </tr>
                  <tr class="row-4">
                    <td class="column-1"></td>
                    <td class="column-2"></td>
                  </tr>
                </tbody>
              </table>


              <p style="text-align:center">For Details</p>
              <div style="text-align: center;">
                <span style="margin: 6px 0px;" class="separator transparent">
                  <a style="text-align:center" class="pps-btn pps-button-popup " title="Specification" onclick="window.location.href='assets/doc/IX/Brosur I.X R2.pdf'">Download Brosur</a>
                </span>
              </div>

              <!-- #tablepress-4 from cache -->
            </div>
          </li>
        </div>
      </div>
    </div>
    <!--.pps-wrap-->
  </div>

  <!--.pps-popup-->
  <style type="text/css">
    #popuppress-735 {
      width: 640px;
      height: auto;
      -webkit-border-radius: 7px;
      -moz-border-radius: 7px;
      border-radius: 7px;
      border: solid 8px rgba(0, 0, 0, 0.4);
    }

    #popuppress-735 .pps-wrap {
      padding: 15px 20px 15px 20px;
      background-color: #FFFFFF;
      -webkit-border-radius: 5px;
      -moz-border-radius: 5px;
      border-radius: 5px;
    }

    @media screen and (max-width: 600px) {
      #popuppress-735 .pps-wrap {
        padding: 0.6em;
      }
    }

    #popuppress-735 .pps-header {
      background-color: #FFFFFF;
      -moz-border-radius: 2px 2px 0px 0px;
      -webkit-border-radius: 2px 2px 0px 0px;
      border-radius: 2px 2px 0px 0px;
    }

    #popuppress-735 .pps-header h3 {
      margin-bottom: 10px;
      padding-top: 0px;
      padding-right: 0px;
      padding-bottom: 14px;
      padding-left: 0px;
      border-color: #EEEEEE;
      line-height: 1.4;
      font-size: 20px;
      color: #444444;
      text-align: left
    }

    #popuppress-735 .pps-content {
      padding: 0px;
    }

    #popuppress-735 .pps-iframe iframe {
      height: 460px;
    }

    #popuppress-735 .pps-pdf iframe {
      height: 460px;
    }

    #popuppress-735 .pps-embed iframe {
      width: 100%;
      height: 460px;
    }

    #popuppress-735 .pps-control-nav {
      bottom: -38px;
    }

    #popuppress-735 .pps-content,
    #popuppress-735 .pps-content p,
    #popuppress-735 .pps-content ul,
    #popuppress-735 .pps-content ol,
    #popuppress-735 .pps-content em,
    #popuppress-735 .pps-content span,
    #popuppress-735 .pps-content a {
      font-size: 16px;
      line-height: 1.6;
    }

    #popuppress-735 .pps-content h1 {
      font-size: 32px;
      line-height: 1.3;
      margin: 0.5em 0;
      padding: 0px;
    }

    #popuppress-735 .pps-content h2 {
      font-size: 27.2px;
      line-height: 1.3;
      margin: 0.4em 0;
      padding: 0px;
    }

    #popuppress-735 .pps-content h3 {
      font-size: 20.8px;
      line-height: 1.3;
      margin: 0.3em 0;
      padding: 0px;
    }

    /* Customize the button of the popup */

    a.pps-btn.pps-button-popup {
      color: #FFF;
      font-size: 15px;
      line-height: 50px;
      font-weight: 700;
      padding: 5px 20px 4px;
      font-family: Arial, Helvetica, sans-serif;
      background-color: #de3200;
      border-bottom: none;
      border-radius: 30px;
      text-transform: uppercase;
    }

    a.pps-btn.pps-button-popup:hover {
      background-color: #7a0001;
      border-color: #1B80C5;
      border-bottom: none;
    }

    /* Add additional styles */

    #popuppress-735.pps-popup.pps-has-border:before {
      top: -22px;
      right: -22px;
      width: 46px;
      height: 46px;
      -webkit-border-radius: 46px;
      -moz-border-radius: 46px;
      border-radius: 46px;
      background-color: rgba(0, 0, 0, 0.4);
    }

    #popuppress-735 .pps-close {
      position: absolute;
      top: -14px;
      right: -14px;
    }

    #popuppress-735 .pps-close a.pps-close-link {
      width: 18px;
      height: 18px;
      line-height: 1;
      background-color: #FFFFFF;
      -webkit-border-radius: 18px;
      -moz-border-radius: 18px;
      border-radius: 18px;
    }

    #popuppress-735 .pps-close a.pps-close-link i.pps-icon:before {
      font-size: 18px;
      line-height: 1;
      color: #999999
    }

    #popuppress-735 .pps-close a.pps-close-link:hover i.pps-icon:before {
      color: #222222
    }
  </style>


  <script type="text/javascript">
    jQuery(document).ready(function($) {

      jQuery(document).delegate(".pps-button-popup-735,a[href='pps-button-popup-735'],a[href='#pps-button-popup-735']", "click ", function(e) {
        e.preventDefault();

        startAtNum = (jQuery(this).hasClass("pps-button-thumb")) ? jQuery(this).attr("class").split(" ").pop().replace(/[^0-9\.]/g, "") : 0;
        pps_popup_735 = jQuery("#popuppress-735").bPopup({
          closeClass: "pps-close-link-735",
          easing: "swing",
          modalClose: true,
          modalColor: "#000000",
          opacity: 0.75,
          positionStyle: "absolute",
          position: ["auto", "auto"],
          speed: 300,
          transition: "fadeIn",
          zIndex: 99999,
          amsl: 0,
          escClose: true,
          follow: [true, true],
          scrollBar: true,
          onOpen: function() {
            manageSizeEmbedPopupPress(706, 460);
            manageSizeIframePopupPress(706, 460);
            manageSizePdfPopupPress(706, 460);
            setImageOverlayPopupPress(706, "");
            onOpenPopupPress(706);
            disclaimerPopupPress(706, "false", "same_page", "close_page", "false", "current_session", 1);
          },
          onClose: function() {
            onClosePopupPress(735);
          },
        }, function() {
          openedPopupPress(735);
        }); //end bPopup

      }); //end delegate

    });
  </script>

  <!-- PTT360 (Push-to-Talk over Cellular) -->
  <div id="popuppress-737" class="pps-popup  pps-has-border pps-w-640-px pps-h-auto-px  " data-popuppress="{" width ":" 640 "," width_units ":" px "," height ":" auto "," height_units ":" px "," auto_height ":" true "," position ":" absolute "," position_x ":" auto "," position_y ":" auto "," close_mouseleave ":" false "," class_run ":" "}">
    <div class="pps-wrap">
      <div class="pps-close"><a href="#" class="pps-close-link-737 pps-close-link" id="pps-close-link-737" title="Close"><i class="pps-icon pps-icon-close"></i></a></div>
      <div class="pps-content">
        <div class="pps-single-popup">
          <li class="pps-item-content">
            <div class="pps-content-wp-editor entry-content post-content">
              <p><img class="alignnone size-medium wp-image-1281 aligncenter" src="assets/doc/IX/I.X.-R2.png" alt="LOGO" width="300" height="300"></p>
              <h3><b>Minimum Requirements</b></h3>

              <table id="tablepress-4" class="tablepress tablepress-id-4">
                <tbody>
                  <tr class="row-1">
                    <td class="column-1">System<br>
                    </td>
                    <td class="column-2">Android 6.0 or iOS 10.3 <br>
                    </td>
                  </tr>
                  <tr class="row-2">
                    <td class="column-1"> Bluetooth <br>
                    </td>
                    <td class="column-2"> BLE 4.1<br>
                    </td>
                  </tr>
                  <tr class="row-2">
                    <td class="column-1"> Battery <br>
                    </td>
                    <td class="column-2"> Battery life 5 days<br>
                    </td>
                  </tr>
                  <tr class="row-3">
                    <td class="column-1">Includes<br>
                    </td>
                    <td class="column-2">Charging docs and cable<br> </td>
                  </tr>
                  <tr class="row-4">
                    <td class="column-1"></td>
                    <td class="column-2"></td>
                  </tr>
                </tbody>
              </table>


              <p style="text-align:center">For Details</p>
              <div style="text-align: center;">
                <span style="margin: 6px 0px;" class="separator transparent">
                  <a style="text-align:center" class="pps-btn pps-button-popup " title="Specification" onclick="window.location.href='assets/doc/IX/Brosur I.X R2.pdf'">Download Brosur</a>
                </span>
              </div>

              <!-- #tablepress-4 from cache -->
            </div>
          </li>
        </div>
      </div>
    </div>
    <!--.pps-wrap-->
  </div>

  <!--.pps-popup-->
  <style type="text/css">
    #popuppress-737 {
      width: 640px;
      height: auto;
      -webkit-border-radius: 7px;
      -moz-border-radius: 7px;
      border-radius: 7px;
      border: solid 8px rgba(0, 0, 0, 0.4);
    }

    #popuppress-737 .pps-wrap {
      padding: 15px 20px 15px 20px;
      background-color: #FFFFFF;
      -webkit-border-radius: 5px;
      -moz-border-radius: 5px;
      border-radius: 5px;
    }

    @media screen and (max-width: 600px) {
      #popuppress-737 .pps-wrap {
        padding: 0.6em;
      }
    }

    #popuppress-737 .pps-header {
      background-color: #FFFFFF;
      -moz-border-radius: 2px 2px 0px 0px;
      -webkit-border-radius: 2px 2px 0px 0px;
      border-radius: 2px 2px 0px 0px;
    }

    #popuppress-737 .pps-header h3 {
      margin-bottom: 10px;
      padding-top: 0px;
      padding-right: 0px;
      padding-bottom: 14px;
      padding-left: 0px;
      border-color: #EEEEEE;
      line-height: 1.4;
      font-size: 20px;
      color: #444444;
      text-align: left
    }

    #popuppress-737 .pps-content {
      padding: 0px;
    }

    #popuppress-737 .pps-iframe iframe {
      height: 460px;
    }

    #popuppress-737 .pps-pdf iframe {
      height: 460px;
    }

    #popuppress-737 .pps-embed iframe {
      width: 100%;
      height: 460px;
    }

    #popuppress-737 .pps-control-nav {
      bottom: -38px;
    }

    #popuppress-737 .pps-content,
    #popuppress-737 .pps-content p,
    #popuppress-737 .pps-content ul,
    #popuppress-737 .pps-content ol,
    #popuppress-737 .pps-content em,
    #popuppress-737 .pps-content span,
    #popuppress-737 .pps-content a {
      font-size: 16px;
      line-height: 1.6;
    }

    #popuppress-737 .pps-content h1 {
      font-size: 32px;
      line-height: 1.3;
      margin: 0.5em 0;
      padding: 0px;
    }

    #popuppress-737 .pps-content h2 {
      font-size: 27.2px;
      line-height: 1.3;
      margin: 0.4em 0;
      padding: 0px;
    }

    #popuppress-737 .pps-content h3 {
      font-size: 20.8px;
      line-height: 1.3;
      margin: 0.3em 0;
      padding: 0px;
    }

    /* Customize the button of the popup */

    a.pps-btn.pps-button-popup {
      color: #FFF;
      font-size: 15px;
      line-height: 50px;
      font-weight: 700;
      padding: 5px 20px 4px;
      font-family: Arial, Helvetica, sans-serif;
      background-color: #de3200;
      border-bottom: none;
      border-radius: 30px;
      text-transform: uppercase;
    }

    a.pps-btn.pps-button-popup:hover {
      background-color: #7a0001;
      border-color: #1B80C5;
      border-bottom: none;
    }

    /* Add additional styles */

    #popuppress-737.pps-popup.pps-has-border:before {
      top: -22px;
      right: -22px;
      width: 46px;
      height: 46px;
      -webkit-border-radius: 46px;
      -moz-border-radius: 46px;
      border-radius: 46px;
      background-color: rgba(0, 0, 0, 0.4);
    }

    #popuppress-737 .pps-close {
      position: absolute;
      top: -14px;
      right: -14px;
    }

    #popuppress-737 .pps-close a.pps-close-link {
      width: 18px;
      height: 18px;
      line-height: 1;
      background-color: #FFFFFF;
      -webkit-border-radius: 18px;
      -moz-border-radius: 18px;
      border-radius: 18px;
    }

    #popuppress-737 .pps-close a.pps-close-link i.pps-icon:before {
      font-size: 18px;
      line-height: 1;
      color: #999999
    }

    #popuppress-737 .pps-close a.pps-close-link:hover i.pps-icon:before {
      color: #222222
    }
  </style>


  <script type="text/javascript">
    jQuery(document).ready(function($) {

      jQuery(document).delegate(".pps-button-popup-737,a[href='pps-button-popup-737'],a[href='#pps-button-popup-737']", "click ", function(e) {
        e.preventDefault();

        startAtNum = (jQuery(this).hasClass("pps-button-thumb")) ? jQuery(this).attr("class").split(" ").pop().replace(/[^0-9\.]/g, "") : 0;
        pps_popup_737 = jQuery("#popuppress-737").bPopup({
          closeClass: "pps-close-link-737",
          easing: "swing",
          modalClose: true,
          modalColor: "#000000",
          opacity: 0.75,
          positionStyle: "absolute",
          position: ["auto", "auto"],
          speed: 300,
          transition: "fadeIn",
          zIndex: 99999,
          amsl: 0,
          escClose: true,
          follow: [true, true],
          scrollBar: true,
          onOpen: function() {
            manageSizeEmbedPopupPress(706, 460);
            manageSizeIframePopupPress(706, 460);
            manageSizePdfPopupPress(706, 460);
            setImageOverlayPopupPress(706, "");
            onOpenPopupPress(706);
            disclaimerPopupPress(706, "false", "same_page", "close_page", "false", "current_session", 1);
          },
          onClose: function() {
            onClosePopupPress(737);
          },
        }, function() {
          openedPopupPress(737);
        }); //end bPopup

      }); //end delegate

    });
  </script>

          

  <!-- I.X. R2 Security -->
  <div id="popuppress-706" class="pps-popup  pps-has-border pps-w-640-px pps-h-auto-px  " data-popuppress="{" width ":" 640 "," width_units ":" px "," height ":" auto "," height_units ":" px "," auto_height ":" true "," position ":" absolute "," position_x ":" auto "," position_y ":" auto "," close_mouseleave ":" false "," class_run ":" "}">
    <div class="pps-wrap">
      <div class="pps-close"><a href="#" class="pps-close-link-706 pps-close-link" id="pps-close-link-706" title="Close"><i class="pps-icon pps-icon-close"></i></a></div>
      <div class="pps-content">
        <div class="pps-single-popup">
          <li class="pps-item-content">
            <div class="pps-content-wp-editor entry-content post-content">
              <p><img class="alignnone size-medium wp-image-1281 aligncenter" src="assets/img/logo.png" alt="LOGO" width="127" height="350"></p>
              <h3><b>C600</b></h3>

              <table id="tablepress-4" class="tablepress tablepress-id-4">
                <tbody>
                  <tr class="row-1">
                    <td class="column-1">Aspec Ratio<br>
                    </td>
                    <td class="column-2">16:9</td>
                  </tr>
                  <tr class="row-2">
                    <td class="column-1">Network Support<br>
                    </td>
                    <td class="column-2">4G<br>
                    </td>
                  </tr>
                  <tr class="row-3">
                    <td class="column-1">Battery Capacity<br>
                    </td>
                    <td class="column-2">5000mAh</td>
                  </tr>
                  <tr class="row-4">
                    <td class="column-1">Screen size<br>
                    </td>
                    <td class="column-2">1.44 Inch</td>
                  </tr>
                  <tr class="row-5">
                    <td class="column-1"></td>
                    <td class="column-2"></td>
                  </tr>
                </tbody>
              </table>

              <h3><b>C600</b></h3>

              <table id="tablepress-4" class="tablepress tablepress-id-4">
                <tbody>
                  <tr class="row-1">
                    <td class="column-1">Type<br>
                    </td>
                    <td class="column-2">Android</td>
                  </tr>
                  <tr class="row-2">
                    <td class="column-1">Network Support<br>
                    </td>
                    <td class="column-2">4G<br>
                    </td>
                  </tr>
                  <tr class="row-3">
                    <td class="column-1">Battery Capacity<br>
                    </td>
                    <td class="column-2">5000mAh</td>
                  </tr>
                  <tr class="row-4">
                    <td class="column-1">Screen size<br>
                    </td>
                    <td class="column-2">1.44 Inch</td>
                  </tr>
                  <tr class="row-5">
                    <td class="column-1"></td>
                    <td class="column-2"></td>
                  </tr>
                </tbody>
              </table>

              <!-- #tablepress-4 from cache -->
            </div>
          </li>
        </div>
      </div>
    </div>
    <!--.pps-wrap-->
  </div>

  <!--.pps-popup-->
  <style type="text/css">
    #popuppress-706 {
      width: 640px;
      height: auto;
      -webkit-border-radius: 7px;
      -moz-border-radius: 7px;
      border-radius: 7px;
      border: solid 8px rgba(0, 0, 0, 0.4);
    }

    #popuppress-706 .pps-wrap {
      padding: 15px 20px 15px 20px;
      background-color: #FFFFFF;
      -webkit-border-radius: 5px;
      -moz-border-radius: 5px;
      border-radius: 5px;
    }

    @media screen and (max-width: 600px) {
      #popuppress-706 .pps-wrap {
        padding: 0.6em;
      }
    }

    #popuppress-706 .pps-header {
      background-color: #FFFFFF;
      -moz-border-radius: 2px 2px 0px 0px;
      -webkit-border-radius: 2px 2px 0px 0px;
      border-radius: 2px 2px 0px 0px;
    }

    #popuppress-706 .pps-header h3 {
      margin-bottom: 10px;
      padding-top: 0px;
      padding-right: 0px;
      padding-bottom: 14px;
      padding-left: 0px;
      border-color: #EEEEEE;
      line-height: 1.4;
      font-size: 20px;
      color: #444444;
      text-align: left
    }

    #popuppress-706 .pps-content {
      padding: 0px;
    }

    #popuppress-706 .pps-iframe iframe {
      height: 460px;
    }

    #popuppress-706 .pps-pdf iframe {
      height: 460px;
    }

    #popuppress-706 .pps-embed iframe {
      width: 100%;
      height: 460px;
    }

    #popuppress-706 .pps-control-nav {
      bottom: -38px;
    }

    #popuppress-706 .pps-content,
    #popuppress-706 .pps-content p,
    #popuppress-706 .pps-content ul,
    #popuppress-706 .pps-content ol,
    #popuppress-706 .pps-content em,
    #popuppress-706 .pps-content span,
    #popuppress-706 .pps-content a {
      font-size: 16px;
      line-height: 1.6;
    }

    #popuppress-706 .pps-content h1 {
      font-size: 32px;
      line-height: 1.3;
      margin: 0.5em 0;
      padding: 0px;
    }

    #popuppress-706 .pps-content h2 {
      font-size: 27.2px;
      line-height: 1.3;
      margin: 0.4em 0;
      padding: 0px;
    }

    #popuppress-706 .pps-content h3 {
      font-size: 20.8px;
      line-height: 1.3;
      margin: 0.3em 0;
      padding: 0px;
    }

    /* Customize the button of the popup */

    a.pps-btn.pps-button-popup {
      color: #FFF;
      font-size: 15px;
      line-height: 50px;
      font-weight: 700;
      padding: 5px 20px 4px;
      font-family: Arial, Helvetica, sans-serif;
      background-color: #de3200;
      border-bottom: none;
      border-radius: 30px;
      text-transform: uppercase;
    }

    a.pps-btn.pps-button-popup:hover {
      background-color: #7a0001;
      border-color: #1B80C5;
      border-bottom: none;
    }

    /* Add additional styles */

    #popuppress-706.pps-popup.pps-has-border:before {
      top: -22px;
      right: -22px;
      width: 46px;
      height: 46px;
      -webkit-border-radius: 46px;
      -moz-border-radius: 46px;
      border-radius: 46px;
      background-color: rgba(0, 0, 0, 0.4);
    }

    #popuppress-706 .pps-close {
      position: absolute;
      top: -14px;
      right: -14px;
    }

    #popuppress-706 .pps-close a.pps-close-link {
      width: 18px;
      height: 18px;
      line-height: 1;
      background-color: #FFFFFF;
      -webkit-border-radius: 18px;
      -moz-border-radius: 18px;
      border-radius: 18px;
    }

    #popuppress-706 .pps-close a.pps-close-link i.pps-icon:before {
      font-size: 18px;
      line-height: 1;
      color: #999999
    }

    #popuppress-706 .pps-close a.pps-close-link:hover i.pps-icon:before {
      color: #222222
    }
  </style>

  <!-- Conquest S29 Technical Specification -->
<div id="popuppress-739" class="pps-popup  pps-has-border pps-w-640-px pps-h-auto-px" data-popuppress='{"width":"640","width_units":"px","height":"auto","height_units":"px","auto_height":"true","position":"absolute","position_x":"auto","position_y":"auto","close_mouseleave":"false","class_run":""}'>
    <div class="pps-wrap">
        <div class="pps-close">
            <a href="#" class="pps-close-link-739 pps-close-link" id="pps-close-link-739" title="Close">
                <i class="pps-icon pps-icon-close"></i>
            </a>
        </div>
        <div class="pps-content">
            <div class="pps-single-popup">
                <li class="pps-item-content">
                    <div class="pps-content-wp-editor entry-content post-content">
                        <p><img class="alignnone size-medium wp-image-1281 aligncenter" src="assets/img/clients/conquest.png" alt="Conquest S29 LOGO" width="300" height="300"></p>
                        <h3><b>Technical Specification</b></h3>

                        <table id="tablepress-739" class="tablepress tablepress-id-739">
                            <tbody>
                                <tr class="row-1">
                                    <td class="column-1">System<br></td>
                                    <td class="column-2">Android 11, 5G compatible<br></td>
                                </tr>
                                <tr class="row-2">
                                    <td class="column-1">Memory<br></td>
                                    <td class="column-2">8 GB RAM, 128 GB internal storage<br></td>
                                </tr>
                                <tr class="row-3">
                                    <td class="column-1">Battery<br></td>
                                    <td class="column-2">7600 mAh, large capacity<br></td>
                                </tr>
                                <tr class="row-4">
                                    <td class="column-1">Cameras<br></td>
                                    <td class="column-2">13 MP (rear) with night vision, front camera not specified<br></td>
                                </tr>
                                <tr class="row-5">
                                    <td class="column-1">Additional Features<br></td>
                                    <td class="column-2">Infrared thermal imaging, digital-analog DMR walkie-talkie, RFID, 1/2D barcode scanner, IP68 waterproof, NFC, flashlight, and temperature measurement.<br></td>
                                </tr>
                            </tbody>
                        </table>

                        <p style="text-align:center">For Details</p>
                        <div style="text-align: center;">
                            <span style="margin: 6px 0px;" class="separator transparent">
                                <a style="text-align:center" class="pps-btn pps-button-popup" title="Specification" onclick="window.location.href='assets/doc/Conquest_S29_Brochure.pdf'">Download Brochure</a>
                            </span>
                        </div>
                    </div>
                </li>
            </div>
        </div>
    </div>
    <!--.pps-wrap-->
</div>

<!--.pps-popup-->
<style type="text/css">
    #popuppress-739 {
        width: 640px;
        height: auto;
        border-radius: 7px;
        border: solid 8px rgba(0, 0, 0, 0.4);
    }

    #popuppress-739 .pps-wrap {
        padding: 15px 20px;
        background-color: #FFFFFF;
        border-radius: 5px;
    }

    #popuppress-739 .pps-close {
        position: absolute;
        top: -14px;
        right: -14px;
    }

    #popuppress-739 .pps-close a.pps-close-link {
        width: 18px;
        height: 18px;
        background-color: #FFFFFF;
        border-radius: 18px;
    }

    #popuppress-739 .pps-close a.pps-close-link i.pps-icon:before {
        font-size: 18px;
        color: #999999;
    }

    a.pps-btn.pps-button-popup {
        color: #FFF;
        font-size: 15px;
        line-height: 50px;
        font-weight: 700;
        padding: 5px 20px 4px;
        background-color: #de3200;
        border-radius: 30px;
        text-transform: uppercase;
    }

    a.pps-btn.pps-button-popup:hover {
        background-color: #7a0001;
    }
</style>

<script type="text/javascript">
    jQuery(document).ready(function($) {
        jQuery(document).delegate(".pps-button-popup-739,a[href='pps-button-popup-739'],a[href='#pps-button-popup-739']", "click", function(e) {
            e.preventDefault();
            var pps_popup_739 = jQuery("#popuppress-739").bPopup({
                closeClass: "pps-close-link-739",
                easing: "swing",
                modalClose: true,
                modalColor: "#000000",
                opacity: 0.75,
                position: ["auto", "auto"],
                speed: 300,
                transition: "fadeIn",
                zIndex: 99999,
                onOpen: function() {
                    manageSizeEmbedPopupPress(706, 460);
                    manageSizeIframePopupPress(706, 460);
                    manageSizePdfPopupPress(706, 460);
                },
                onClose: function() {}
            });
        });
    });
</script>



  <script type="text/javascript">
    jQuery(document).ready(function($) {

      jQuery(document).delegate(".pps-button-popup-706,a[href='pps-button-popup-706'],a[href='#pps-button-popup-706']", "click ", function(e) {
        e.preventDefault();

        startAtNum = (jQuery(this).hasClass("pps-button-thumb")) ? jQuery(this).attr("class").split(" ").pop().replace(/[^0-9\.]/g, "") : 0;
        pps_popup_706 = jQuery("#popuppress-706").bPopup({
          closeClass: "pps-close-link-706",
          easing: "swing",
          modalClose: true,
          modalColor: "#000000",
          opacity: 0.75,
          positionStyle: "absolute",
          position: ["auto", "auto"],
          speed: 300,
          transition: "fadeIn",
          zIndex: 99999,
          amsl: 0,
          escClose: true,
          follow: [true, true],
          scrollBar: true,
          onOpen: function() {
            manageSizeEmbedPopupPress(706, 460);
            manageSizeIframePopupPress(706, 460);
            manageSizePdfPopupPress(706, 460);
            setImageOverlayPopupPress(706, "");
            onOpenPopupPress(706);
            disclaimerPopupPress(706, "false", "same_page", "close_page", "false", "current_session", 1);
          },
          onClose: function() {
            onClosePopupPress(706);
          },
        }, function() {
          openedPopupPress(706);
        }); //end bPopup

      }); //end delegate

    });
  </script>

  


  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script type="text/javascript" src="assets/vendor/popup-press/js/libs/bpopup_ver=0.10.js"></script>
  <script type="text/javascript" src="assets/vendor/popup-press/js/libs/jquery.popupslider_ver=2.5.0.js"></script>
  <script type="text/javascript" src="assets/vendor/popup-press/js/libs/jquery.cookie_ver=1.4.1.js"></script>
  <script type="text/javascript" src="assets/vendor/popup-press/js/libs/jquery.easing.1.3_ver=1.3.js"></script>
  <script type="text/javascript">
    /* <![CDATA[ */
    var PPS = {
      "ajaxurlPps": "https:\/\/www.comm360.biz\/wp-admin\/admin-ajax.php",
      "loader_text": ""
    };
    /* ]]> */
  </script>
  <script type="text/javascript" src="assets/vendor/popup-press/js/pps_script_ver=2.9.7.js"></script>
  <script type="text/javascript" src="assets/vendor/popup-press/wp-embed.min_ver=5.2.11.js"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $(".pps-popup").on("ppsOnOpen", function(e) {
        //Do something when you open any popups
      });

      $("#popuppress-5").on("ppsOnClose", function(e) {
        //Do something when you close the popup id = 5
      });
    });

  </script>

</body>

</html>
