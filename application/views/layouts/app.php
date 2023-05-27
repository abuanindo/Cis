<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.111.3">
    <title>
        <?= isset($title) ? $title : 'CIShop' ?>
    </title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/navbar-fixed/">

    <!--Bootstap css-->
    <link href="/assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!--Fontawesome-->
    <link href="/assets/libs/fontawesome/css/all.min.css" rel="stylesheet">

    <!--Costum style Css-->
    <link href="/assets/css/app.css" rel="stylesheet">
</head>
  <body>

        
   <!-- Navbar -->
		<?php $this->load->view('layouts/_navbar'); ?>
		<!-- Endnavbar -->

		<!-- Content -->
		<?php $this->load->view($page); ?>
		<!-- End Content -->
      
  </body>
</html>