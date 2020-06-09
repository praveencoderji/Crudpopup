<div class="modal fade" id="delete_modal<?php echo $fetch['id']?>" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="POST" action="delete_query.php">
					<div class="modal-header">
						<h3 class="modal-title">Delete User</h3>
					</div>
					<div class="modal-body">
						<div class="col-md-2"></div>
						<div class="col-md-8">
							<input type="hidden" name="delete_id" value="<?php echo $fetch['ID']?>">
							<h4>Do You Want to Delete This Data??</h4>
							
					</div>
					<div style="clear:both;"></div>
					<div class="modal-footer">
						<button name="save" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Yes !! Delete it</button>
						<button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
					</div>
					</div>
				</form>
			</div>
		</div>
	</div>	