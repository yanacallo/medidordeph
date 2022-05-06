<?php $this->load->view('templates/header'); ?>
<?php //$this->load->view('templates/navi'); ?>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
	<?php //echo $this->session->flashdata('result'); ?>
	<?php if (!empty($locations)){ ?>
				<table class="table table-striped mt-5">
				  <thead class="thead-dark">
				    <tr>
				      <th scope="col">Descripción</th>
				      <th scope="col">Latitud</th>
				      <th scope="col">Longitud</th>
				      <th scope="col">Acciones</th>

				    </tr>
				  </thead>
				  <tbody>
	<?php foreach ($locations as $value): ?>
			    <tr>
			      <td><?php echo $value['description'] ? $value['description'] : 'No description...';  ?></td>
			      <td><?php echo $value['lat'] ?></td>
			      <td><?php echo $value['lng'] ?></td>
			      <td><a href="<?php echo base_url('index.php/mapsapi/edit/'); echo $value['id']; ?>" class="btn btn-success mr-2"><i class="fa fa-pencil"></i> Editar</a><a href="<?php echo base_url('index.php/mapsapi/delete/'); echo $value['id']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar</a></td>

			    </tr>
<?php endforeach ?>
			  </tbody>
			</table>
<?php } else { ?>
			<table class="table table-striped table-dark mt-3">
			  <thead>
			    <tr>
			      <th scope="col">No data available in table. You must first add a location from <a href="<?php echo base_url(); ?>">home page.</a>.</th>
			    </tr>
			  </thead>
			</table>
<?php } ?>
        </div>
      </div>
	</div>
  </body>
</html>
