<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width-device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<link rel="stylesheet" type="text/css" href="css/datatables.min.css"/>

	</head>
	<style type="text/css">
		tr, td:hover { 
   -webkit-transform: scaleY(1.1); 
   -moz-transform:    scale(1.1);
   -ms-transform:     scale(1.1); 
   -o-transform:      scale(1.1); 
   background-color: turquoise;
}


	</style>
	
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary"></h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<button type="button" class="btn btn-success" data-toggle="modal" data-target="#form_modal"><span class="glyphicon glyphicon-plus"></span> Add user</button>
		<br /><br />
		<table class="table table-bordered table-striped" id="tab">
			<thead class="alert-success">
				<tr>
					<th>Name</th>
					<th>Age</th>
					<th>Location</th>
					<th>Intrest</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tbody style="background-color:#fff;">
				<?php
					require 'conn.php';
					$query = mysqli_query($conn, "SELECT * FROM `user`") or die(mysqli_error());
					while($fetch = mysqli_fetch_array($query)){
						$dateOfBirth = $fetch['dob'];
						$today = date("Y-m-d");
                        $diff = date_diff(date_create($dateOfBirth), date_create($today));
				?>
				<tr>
					<td><?php echo $fetch['name']?></td>
					<td><?php echo $diff->format('%y');?></td>
					<td><?php echo $fetch['location']?></td>
					<td><?php echo $fetch['intrest']?></td>
					<td><button class="btn btn-warning" data-toggle="modal" type="button" data-target="#update_modal<?php echo $fetch['id']?>"><span class="glyphicon glyphicon-edit"></span> Edit</button></td>

					<td><button class="btn btn-danger" data-toggle="modal" type="button" data-target="#delete_modal<?php echo $fetch['id']?>"><span class="glyphicon glyphicon-remove"></span> Delete</button></td>
				</tr>
				<?php
					
					include 'update_user.php';
					include 'delete_users.php';
					
					}
				?>
			</tbody>
		</table>
	</div>




	


	<!--#############################################################-->
	<div class="modal fade" id="form_modal" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="POST" action="save_user.php">
					<div class="modal-header">
						<h3 class="modal-title">Add User</h3>
					</div>
					<div class="modal-body">
						<div class="col-md-2"></div>
						<div class="col-md-8">
							<div class="form-group">
								<label>Name</label>
								<input type="text" name="name" class="form-control" required="required"/>
							</div>
							<div class="form-group">
								<label>DOB</label>
								<input type="date" name="dob" class="form-control" required="required" />
							</div>
							<div class="form-group">
								<label>Location</label>
								<input type="text" name="loca" class="form-control" required="required" />
							</div>
							<div class="form-group">
								<label>Intrests</label>
								<input type="text" name="inter" class="form-control" required="required"/>
							</div>
						</div>
					</div>
					<div style="clear:both;"></div>
					<div class="modal-footer">
						<button name="save" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Save</button>
						<button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
					</div>
					</div>
				</form>
			</div>
		</div>
	</div>	

	<!--#############################################################-->
<script src="js/jquery-3.2.1.min.js"></script>	
<script src="js/bootstrap.js"></script>	
<script src="js/datatables.min.js"></script>	
 <script type="text/javascript">
        $(document).ready(function(){
             
            $("#tab").DataTable();			
        });
    </script>
</body>	
</html>