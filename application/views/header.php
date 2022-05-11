<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>Medicion de PH</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="Construction Company Website Template" name="keywords">
  <meta content="Construction Company Website Template" name="description">

  <!-- Favicon -->
  <link href="https://www.utc.edu.ec/Portals/0/BELEN/NUEVAimagen/utc.ico?ver=2019-05-08-100359-913" rel="icon">


  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- CSS Libraries -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/template/lib/flaticon/font/flaticon.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/template/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/template/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/template/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/template/lib/slick/slick.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/template/lib/slick/slick-theme.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="<?php echo base_url(); ?>/assets/template/css/style.css" rel="stylesheet">


  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <script type="text/javascript" src="<?php echo base_url('assets/validator/jquery.validate.min.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/validator/additional-methods.min.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/validator/misvalidaciones.js'); ?>"></script>

  <script type="text/javascript">
    toastr.options = {
      "closeButton": true,
      "newestOnTop": false,
      "progressBar": true,
      "positionClass": "toast-top-right",
      "preventDuplicates": false,
      "onclick": null,
      "showDuration": "300",
      "hideDuration": "1000",
      "timeOut": "10000",
      "extendedTimeOut": "1000",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
    }
  </script>

  <link href="<?php echo base_url(); ?>assets/fullcalendar/fullcalendar.min.css" rel="stylesheet">
  <script src='<?php echo base_url(); ?>assets/fullcalendar/moment.min.js'></script>
  <script src='<?php echo base_url(); ?>assets/fullcalendar/fullcalendar.min.js'></script>
  <script src="<?php echo base_url(); ?>assets/fullcalendar/locale-all1.js"></script>
  <script src="<?php echo base_url(); ?>assets/fullcalendar/es1.js"></script>
  <style media="screen">
    label.error {
      color: red;
    }

    input.error,
    select.error,
    textarea.error {
      border: 1px solid red;
    }
  </style>
</head>

<body>
  <div class="wrapper">
    <!-- Top Bar Start -->
    <div class="d-none d-lg-block">
    </div>
    <div class="top-bar">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-lg-12 col-md-12">
            <div class="logo">
              <a href="<?php echo site_url(); ?>">
                <h1 style="font-size:30px;">SISTEMA MEDIDOR DE PH</h1>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Top Bar End -->

    <!-- Nav Bar Start -->
    <div class="nav-bar">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
          <a href="#" class="navbar-brand"><b>MENU</b></a>
          <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav mr-auto">
              <a href="<?php echo site_url(); ?>" id="menu_inicio" class="nav-item nav-link"><i class="fa fa-home"></i>&nbsp;&nbsp;Inicio&nbsp;&nbsp;</a>


              <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="medicion">
                  <i class="fas fa-chart-area"></i>&nbsp;&nbsp;MEDICION&nbsp;&nbsp;
                </a>
                <div class="dropdown-menu">
                  <a href="<?php echo site_url('lugares/gestionLugares'); ?>" class="dropdown-item">
                    <i class="fas fa-object-group"></i>&nbsp;&nbsp;Localidad&nbsp;&nbsp;
                  </a>
                  <!-- <a href="<?php echo site_url('terrenos/gestionTerrenos'); ?>" class="dropdown-item">
                    <i class="fa fa-object-group"></i>&nbsp;&nbsp;Terrenos&nbsp;&nbsp;
                  </a> -->
                </div>
              </div>
              <a href="<?php echo site_url('reportes/index'); ?>" class="dropdown-item">
                    <i class="far fa-clipboard"></i>&nbsp;&nbsp;Reporte&nbsp;&nbsp;
                  </a>

              


              <div class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="geolocalizacion">
                    <i class="fas fa-chart-area"></i>&nbsp;&nbsp;GEOLOCALIZACON&nbsp;&nbsp;
                  </a>
                  <div class="dropdown-menu">
                    <a href="<?php echo site_url('mapsapi/index'); ?>" class="dropdown-item">
                      <i class="fas fa-object-group"></i>&nbsp;&nbsp;OBTENER LOCALIZACION&nbsp;&nbsp;
                    </a>
                    <a href="<?php echo site_url('mapsapi/locations'); ?>" class="dropdown-item">
                      <i class="fa fa-object-group"></i>&nbsp;&nbsp;LOCALIZACIONES&nbsp;&nbsp;
                    </a>
                    <a href="<?php echo site_url('mapsapi/tools'); ?>" class="dropdown-item">
                      <i class="fa fa-object-group"></i>&nbsp;&nbsp;TOOLS&nbsp;&nbsp;
                    </a>
                  </div>
                </div>

              <!-- <?php if ($this->session->userdata('Conectad0')) : ?>
                <div class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                    <i class="fas fa-plug"></i>&nbsp;&nbsp;CONECTADO:&nbsp;&nbsp;<?php echo $this->session->userdata('Conectad0')->nombre_usu; ?> <?php echo $this->session->userdata('Conectad0')->apellido_usu; ?>
                  </a>
                  <div class="dropdown-menu">
                    <a href="<?php echo site_url('security/perfil'); ?>" class="dropdown-item"><i class="fas fa-key"></i>&nbsp;&nbsp;Cambiar Contraseña&nbsp;&nbsp;</a>
                    <a href="<?php echo site_url('security/logout'); ?>" onclick="return confirm('¿Está seguro de salir del sistema?');" class="dropdown-item"><i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;Salir&nbsp;&nbsp;</a>
                  </div>
                </div>
              <?php else : ?>
                <a href="<?php echo site_url('reservas/formulario'); ?>" class="nav-item nav-link" id="solicitar"><i class="fa fa-calendar-plus"></i>&nbsp;&nbsp;Agendar Turno&nbsp;&nbsp;</a>
                <a href="<?php echo site_url('security/login'); ?>" id="ingresar" class="nav-item nav-link"><i class="fas fa-sign-in-alt"></i>&nbsp;&nbsp;Ingresar&nbsp;&nbsp;</a>
              <?php endif; ?> -->

            </div>
          </div>
        </nav>
      </div>
    </div>
    <!-- Nav Bar End -->

    <style media="screen">
      .form-control {
        border: 1px solid #1D1A49;
      }

      #loading {
        position: fixed;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        opacity: 0.7;
        background-color: #fff;
        z-index: 99999 !important;
      }

      #loading-image {
        z-index: 99999 !important;
      }

      .navbar-dark .navbar-brand {
        color: #191919 !important;
      }

      .navbar-dark .navbar-toggler {
        background-color: #191919;
      }

      .navbar-dark .navbar-nav .nav-link:hover,
      .navbar-dark .navbar-nav .nav-link.active {
        background-color: #191919;
        color: #fff;
        border-radius: 5px;
      }

      .nav-item {
        margin-right: 20px;
      }


      .navbar-dark .navbar-nav .show>.nav-link {
        background-color: #191919;
        color: #fff;
      }


      .navbar-dark .navbar-nav .show {
        color: #191919 !important;
      }

      .dropdown-menu.show:hover {
        color: #fff;
      }

      .dropdown-item.active,
      .dropdown-item:active {
        background-color: #191919 !important;
      }

      .dropdown-item.active,
      .dropdown-item:hover {
        background-color: #191919 !important;
        color: #fff;
      }

      .mr-auto {
        margin-left: 10px;
      }
    </style>

    <div id="loading">
      <img id="loading-image" src="<?php echo base_url(); ?>/assets/imagenes/carga.gif" alt="Procesando..." />
    </div>

    <script type="text/javascript">
      $(document).ready(function() {
        $('#loading').hide();
      });

      function mostrarCarga() {
        $('#loading').fadeIn();
      }

      function ocultarCarga() {
        $('#loading').hide();
      }

      $(document).ajaxStart(function() {
        mostrarCarga();
      }).ajaxComplete(function() {
        ocultarCarga();
      });
    </script>
