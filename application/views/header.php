<html>
  <head>
    <html lang="es" dir="ltr">
    <meta charset="UTF-8">
    <title> Página de Votación | Palomo Kevin </title>
    <link rel="stylesheet" href="<?php echo base_url('style/barra.css') ?>">
    	<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
      <!-- IMPORTACION DE BS CDN  -->
  <!-- Latest compiled and minified CSS -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <!-- Link -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css'rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	 <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDjjXjJHamYR5Et-RxCfVEhBtQEnc6YEYY&libraries=places&callback=initMap"> </script>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
   </head>
<body>
  <div class="sidebar close">
    <div class="logo-details">
      <i class='bx bxl-kickstarter bx-tada' style='color:#080808'></i>
      <span class="logo_name"style='color:#080808'>ECUADOR
      <img src="<?php echo base_url('assets/images/pan.png') ?>" alt="">
      </span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="<?php echo site_url('Welcome/home') ?>">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Inicio</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="<?php echo site_url('Welcome/home') ?>">Inicio</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="<?php echo site_url('Reporte/report4');?>">
            <i class='bx bx-book-alt' ></i>
            <span class="link_name">Reportes</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a href="<?php echo site_url('Reporte/report1');?>">Asambleista Nacional</a></li>
          <li><a href="<?php echo site_url('Reporte/report2');?>">Asambleista Provincial</a></li>
          <li><a href="<?php echo site_url('Reporte/report3');?>">Presidente</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="<?php echo site_url('Form/nuevoC');?>">
            <i class='bx bxs-user-voice'></i>
            <span class="link_name">formularios</span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
          <li><a href="<?php echo site_url('Form/nuevoC');?>">NUEVO CANDIDATO</a></li>
          <li><a href="<?php echo site_url('Form/indexC');?>">LISTADO CANDIDATOS</a></li>
        </ul>
      </li>
      <li>
        <a href="<?php echo site_url('Reporte/report4');?>">
          <i class='bx bxs-edit-location'></i>
          <span class="link_name">Reporte General</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="<?php echo site_url('Reporte/report4');?>">General</a></li>
        </ul>
      </li>
      <li>
    <div class="profile-details">
      <div class="profile-content">
        <img src="<?php echo base_url('assets/images/utc.jpg') ?>" alt="profileImg">
      </div>
      <div class="name-job">
        <div class="profile_name">Estudiante</div>
        <div class="job">Palomo Kevin</div>
      </div>
      <br>
    </div>
  </li>
</ul>
  </div>
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">CONOCE A LOS CANDIDATOS "PRESIDENCIALES, PROVINCIALES Y NACIONALES"</span>
    </div>
    <div class="container">
