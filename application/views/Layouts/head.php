<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>resources/images/cargrey.ico">
  <link rel="icon" type="image/png" href="<?php echo base_url(); ?>resources/images/cargrey.ico">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    664CUSTOM
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
  <link href="<?php echo base_url(); ?>resources/css/paper-dashboard.css" rel="stylesheet" />
  </head>
  <body>
    <div class="wrapper">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="<?php echo base_url(); ?>" class="simple-text logo-mini">
           <div class="logo-image-small">
            <img src="<?php echo base_url(); ?>resources/images/logox.png">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="<?php echo base_url(); ?>" class="simple-text logo-normal">
          664CUSTOM
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="<?php echo base_url(); ?>Dashboard">
              <i class="nc-icon nc-bank"></i>
              <p>Principal</p>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url(); ?>Reportes">
              <i class="nc-icon nc-paper"></i>
              <p>Reportes</p>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url(); ?>User">
              <i class="nc-icon nc-single-02"></i>
              <p>Usuarios</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;"><?php echo $title; ?></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="<?php echo base_url(); ?>" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Perfil</a>
                  <a class="dropdown-item" href="#">Configuración</a>
                  <a class="dropdown-item" href="<?php echo base_url() ?>Auth/Logout">Salir</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
