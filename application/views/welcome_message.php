<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>KutaRaja Lovers</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?php echo base_url() ?>asset/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo base_url() ?>asset/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Kuta Raja Lovers</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Home</a></li>
        <li><a href="#">Klasemen</a></li>
        <li><a href="#">Halte</a></li>
        <li><a href="#">Login</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><div class="user-view">
          <div class="background">
            <img src="<?= base_url() ?>asset/img/office.jpg">
          </div>
          <a href="#user"><img class="circle" src="<?= base_url() ?>asset/img/yuna.jpg"></a>
          <a href="#name"><span class="white-text name">John Doe</span></a>
          <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
        </div></li>
        <li><a href="#">Home</a></li>
        <li><a href="#">Klasemen</a></li>
        <li><a href="#">Halte</a></li>
        <li><a href="#">Login</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <div id="map" style="width:100%;height:400px"></div>
      <br><br>

    </div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
            <h5 class="center">10 Top Users</h5>
            <div class="collection">
            <a href="#!" class="collection-item"><span class="badge">1</span>Alan</a>
            <a href="#!" class="collection-item"><span class="new badge">4</span>Alan</a>
            <a href="#!" class="collection-item">Alan</a>
            <a href="#!" class="collection-item"><span class="badge">14</span>Alan</a>
            </div>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">account_balance</i></h2>
            <h5 class="center">10 Top Halte</h5>
            <div class="collection">
            <a href="#!" class="collection-item"><span class="badge">1</span>Alan</a>
            <a href="#!" class="collection-item"><span class="new badge">4</span>Alan</a>
            <a href="#!" class="collection-item">Alan</a>
            <a href="#!" class="collection-item"><span class="badge">14</span>Alan</a>
            </div>

          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">storage</i></h2>
            <h5 class="center">Data</h5>
            <div class="collection">
            <a href="#!" class="collection-item"><span class="badge">40</span>Total User</a>
            <a href="#!" class="collection-item"><span class="badge">52</span>Total Halte</a>
            <a href="#!" class="collection-item"><span class="badge">1878</span>Total Tag</a>
            <a href="#!" class="collection-item"><span class="badge">14</span>Last User Req</a>
            <a href="#!" class="collection-item"><span class="badge">14</span>Last User Visit</a>
            </div>

          </div>
        </div>
      </div>

    </div>
    <br><br>
  </div>

  <footer class="page-footer orange">

    <div class="footer-copyright">
      <div class="container">
      Made by <a class="orange-text text-lighten-3" href="http://materializecss.com" target="_blank">Materialize</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="<?php echo base_url() ?>asset/js/materialize.js"></script>
  <script src="<?php echo base_url() ?>asset/js/init.js"></script>
<script>
function myMap() {
var mapOptions = {
    center: new google.maps.LatLng(51.5, -0.12),
    zoom: 10,
    mapTypeId: google.maps.MapTypeId.HYBRID
}
var map = new google.maps.Map(document.getElementById("map"), mapOptions);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA6FO9mbBR-4uIfKaGeKh2NPagQN2alD04&callback=myMap"></script>
  </body>
</html>
