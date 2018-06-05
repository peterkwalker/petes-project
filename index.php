<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

<?php 
require ('classes/queries/common.php');?>

<div class="container">

	<div class="alert alert-primary" role="alert" style="margin-top: 30px;">
		<h1>This is a web page - obviously</h1>
	</div>

	<table class="table table-striped">
		<thead>
			<tr>
				<th>Name</th>
				<th>Email</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($records as $row) { ?>
				<tr>
					<td><?php echo $row['name']?></td>
					<td><?php echo $row['email']?></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>

	<p>This is the new feature that has been added</p>

	<p>This is the second feature that has been added</p>

</div>




	

	