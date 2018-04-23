<!DOCTYPE html>
<html lang="en">
<head>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template">
    <title>Human Resource</title>
    <!-- Favicons-->
    <link rel="icon" href="config/gambar_tampilan/favicon/favicon-32x32.png" sizes="32x32">
    <!-- Favicons-->
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <link rel="apple-touch-icon-precomposed" href="config/gambar_tampilan/favicon/apple-touch-icon-152x152.png">
    <link href="../assets/css/materialize.css" type="text/css" rel="stylesheet">
    <link href="../assets/css/style.css" type="text/css" rel="stylesheet">
    <link href="../assets/css/custom.css" type="text/css" rel="stylesheet">
    <link href="../assets/css/perfect-scrollbar.css" type="text/css" rel="stylesheet">
    <link href="../assets/css/jquery-jvectormap.css" type="text/css" rel="stylesheet">
    <link href="../assets/css/flag-icon.min.css" type="text/css" rel="stylesheet">
  </head>
  <body style="background-image: url('../assets/images/front-tampilan/back.jpg');">
    <!-- Start Page Loading -->
    <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->
  <div class="container"> 
    <div id="login-page" class="row card-panel" style="width: 100%;height: 600px; background:rgba(255,255,255, 0.5); margin: 0 auto; margin-top: 20px;">
      <div class="col s2">
        <div class="login-form">
          <div class="row">
            <div class="input-field col s12 center">
              <img src="../assets/images/front-tampilan/lambang.jpg" alt="" class="circle responsive-img valign profile-image-login">
             
            </div>
          </div>

          
          
       <form action="temukan_proses.php" method="POST">

          <div class="row margin">
            <div class="input-field col s12">
              <input  type="text" name="no_registerasi">
              <label for="no_registerasi" class="center-align">No Registrasi</label>
            </div>
          </div>
        <br/>
          

          <div class="row">
            <div class="input-field col s12">
              <button type="submit" name="cari" class="btn waves-effect waves-light col s12">Cari Data</button>
            </div>
          </div>
        </div>  
        </form>
      </div> 

    </div>
  </div>
      <!-- jQuery Library -->
      <script type="text/javascript" src="../assets/js/jquery-3.2.1.min.js"></script>
      <!--angularjs-->
     <script type="text/javascript" src="../assets/js/angular.min.js"></script>
      <!--materialize js-->
      <script type="text/javascript" src="../assets/js/materialize.min.js"></script>
      <!--prism-->
      <script type="text/javascript" src="../assets/js/prism.js"></script>
      <!--scrollbar-->
      <script type="text/javascript" src="../assets/js/perfect-scrollbar.min.js"></script>
      <script type="text/javascript" src="../assets/js/plugins.js"></script>
     
  </body>
</html>