<?php
  $id = $meal['meals_id'];
  $name = $meal['meals_name'];
  $photo = $meal['meals_photo'];
  //$link = $meal['link'];
  $category = $meal['meals_categoryid'];
  //$country = $meal['country'];
  //$instruction = $meal['instruction'];
  //$ingredient = $meal['ingredients[]'];
  //$amount = $meal['amount'];
  //$unit = $meal['unit'];
  
?>

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800 mb-5">
    Meal
</h1>

<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h4 class="m-0 font-weight-bold text-primary"> Detail  

        <a href="<?= base_url('meal') ?>" class="btn btn-outline-dark float-right"> 
          <i class="fas fa-backward"></i> Go Back 
        </a>

      </h4>
    </div>
  <div class="card-body">
    
    <div class="row">
      <div class="col-lg-6 col-md-8 col-sm-12">
        <h1> <?= $name; ?> </h1>
        <p> <?php echo $category; ?>
          
        </p>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
        <img src="<?= $photo ?>" class="img-fluid">
      </div>
    </div>
  
  </div>


</div>