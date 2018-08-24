<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<title>Pagination Demo</title>
</head>
<body>

	<div class="container" style="margin-top: 100px;">
		<div class="row">
			<div class="col-md-12">

				<div class="table-responsive">
					<table class="table">
						  <thead>
						    <tr>
						      <th scope="col">#</th>
						      <th scope="col">Manufacturer</th>
						      <th scope="col">Model</th>
						    </tr>
						  </thead>
						  <tbody>
							<?php
							foreach($data['records'] as $r){
								echo '<tr>';
								echo '<td>'.$r->model_id.'</td>';
								echo '<td>'.$r->manufacturer.'</td>';
								echo '<td>'.$r->model.'</td>';
								echo '</tr>';
							}?>	
						  </tbody>
					</table>
				</div>

				 <?php echo $data['page_links']; ?>
			</div>
		</div>

	 
	</div>

	</body>
</html>