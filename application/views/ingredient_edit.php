<?php 
	$id = $ingredient['ingredients_id'];
	$name = $ingredient['ingredients_name'];
	$photo = $ingredient['ingredients_photo'];
 ?>

<div class="container-fluid">
	<div class="card shadow mb-4">
		<div class="card-header">
			<h4 class="m-0 font-weight-bold text-primary"> Edit  

		        <a href="<?= base_url('meal') ?>" class="btn btn-outline-dark float-right"> 
		          <i class="fas fa-backward"></i> Go Back 
		        </a>
			</h4>
		</div>
		<div class="card-body">
			<form action="<?= base_url('ingredient/update') ?>" method="POST" enctype="multipart/form-data">
			
				<input type="hidden" name="id" value="<?= $id ?>">
				<input type="hidden" name="oldphoto" value="<?= $photo ?>">

					<div class="form-group">
						<label for="name"> Name : </label>
						<input type="text" name="name" class="form-control" id="name" required="required" value="<?= $name ?>">
						<div class="text-danger">
							<?= form_error('name'); ?>
						</div>
					</div>
					<div class="form-group">
						<nav>
						  <div class="nav nav-tabs" id="nav-tab" role="tablist">
						    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Old Photo</a>
						    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">New Photo</a>
						  </div>
						</nav>
						<div class="tab-content" id="nav-tabContent">
			  				<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"><img src="<?= $photo; ?>" class="img-fluid w-50"></div>
			  				<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"><input type="file" name="newphoto" class="form-control" id="photo"></div>
						</div>
					</div>
					<button type="submit" class="btn btn-primary"> 
						<i class="fa fa-save"></i>
						UPDATE 
					</button>
			</form>
		</div>
	</div>
</div>