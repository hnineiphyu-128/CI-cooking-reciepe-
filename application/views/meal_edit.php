<?php 
	$id = $meal['meals_id'];
	$name = $meal['meals_name'];
	$ytlink = $meal['meals_youtubelink'];
	$categoryid = $meal['meals_categoryid'];
  	$countryid = $meal['meals_countryid'];

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
			<form action="<?= base_url('meal/update') ?>" method="POST" enctype="multipart/form-data">
			
				<input type="hidden" name="id" value="<?= $id ?>">
				

					<div class="form-group">
						<label for="name"> Name : </label>
						<input type="text" name="name" class="form-control" id="name" required="required" value="<?= $name ?>">
						<div class="text-danger">
							<?= form_error('name'); ?>
						</div>
					</div>
					<div class="form-group">
						<label for="photo"> Youtube Link : </label>
						<input type="text" name="ytlink" class="form-control" id="ytlink">
					</div>
					<div class="form-group">
						<label> Category : </label>
						<select class="form-control" name="category">
							<option value="0"> Choose Category </option>
							
							<?php 
								foreach($categories as $category): 
								$c_id = $category->categories_id;
								$c_name = $category->categories_name;
							?>
								<option value="<?= $c_id ?>"> 
									<?= $c_name; ?>  
								</option>
							<?php endforeach; ?>
						</select>
					</div>
					<div class="form-group">
						<label> Country : </label>
						<select class="form-control" name="country">
							<option value="0"> Choose Country </option>
							
							<?php 
				            	foreach($countries as $country):

				            	$country_id = $country->countries_id;
				              	$country_name = $country->countries_name;
				            ?>
								<option value="<?= $country_id ?>"> 
									<?= $country_name; ?>  
								</option>
							<?php endforeach; ?>
						</select>
					</div>
					<button type="submit" class="btn btn-primary"> 
						<i class="fa fa-save"></i>
						UPDATE 
					</button>
			</form>
		</div>
	</div>
</div>