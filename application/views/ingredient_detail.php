<?php 
	$id = $ingredient['ingredients_id'];
	$name = $ingredient['ingredients_name'];
	$photo = $ingredient['ingredients_photo'];
?>
 <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tables</h1>
          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
              <a href="<?= base_url('meal') ?>" class="btn btn-outline-dark float-right"> 
                <i class="fas fa-backward"></i> Go Back 
              </a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>Photo</th>
                    </tr>
                  </thead>
                  <tbody>
                      <tr>
                        <td><?php echo $id; ?></td>
                        <td><?php echo $name; ?></td>
                        <td><img src="<?php echo $photo; ?>" class="img-fluid w-50"></td>
                      </tr>

                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>