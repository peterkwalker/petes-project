<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

<!-- DataTables -->
 <link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
 <link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">


<?php 
require ('classes/queries/common.php');?>

<div class="container">

	<div class="alert alert-primary" role="alert" style="margin-top: 40px;">
		<h1>This is a web page - obviously</h1>
	</div>

	<table class="table table-striped table-bordered" style="width:100%" id="myTable">
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

	<p>This is the second feature that has been added</p>

</div>

<!-- DataTables -->

<script src="//code.jquery.com/jquery-3.3.1.js"></script>
<script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
</script>




	

	