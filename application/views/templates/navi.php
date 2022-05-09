    <nav class="navbar navbar-expand-lg navbar-dark bg-info static-top">
      <div class="container">
        <a class="navbar" href="<?php echo base_url(); ?>">Geolocalización UTC</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link<?php echo current_url() == base_url() ? ' active' : ''; ?>" href="<?php echo base_url(); ?>">Obtener Localización</a>
            </li>
            <li class="nav-item">
              <a class="nav-link<?php echo current_url() == base_url('index.php/mapsapi/locations') ? ' active' : ''; ?>" href="<?php echo base_url('index.php/mapsapi/locations'); ?>">Localizaciones</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
