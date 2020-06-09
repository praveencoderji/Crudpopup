<div class="modal fade" id="update_modal<?php echo $fetch['id']?>" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action="update_query.php">
				<div class="modal-header">
					<h3 class="modal-title">Update User</h3>
				</div>
				<div class="modal-body">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="form-group">
							<label>name</label>
							<input type="hidden" name="user_id" value="<?php echo $fetch['ID']?>"/>
							<input type="text" name="name" value="<?php echo $fetch['name']?>" class="form-control" required="required"/>
						</div>
						<div class="form-group">
							<label>DOB</label>
							<input type="date" name="dob" value="<?php echo $fetch['dob']?>" class="form-control" required="required" />
						</div>
						<div class="form-group">
							<label>Location</label>
							<input type="text" name="loca" value="<?php echo $fetch['location']?>" class="form-control" required="required"/>
						</div>
						<div class="form-group">
							<label>Intrests</label>
							<input type="text" name="inter" value="<?php echo $fetch['intrest']?>" class="form-control" required="required"/>
						</div>
					</div>
				</div>
				<div style="clear:both;"></div>
				<div class="modal-footer">
					<button name="update" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Update</button>
					<button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
				</div>
				</div>
			</form>
		</div>
	</div>
</div>