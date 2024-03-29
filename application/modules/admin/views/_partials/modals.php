<!-- The Modal -->
<div class="modal" id="ownerList">
	<div class="modal-dialog">
		<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header">
				<h4 class="modal-title">Owners List</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<!-- Modal body -->
			<div class="modal-body">
				<div>
					<table class="table table-sm table-bordered">
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th></th>
						</tr>
						<?php if (!empty($ownersList)): ?>
							<?php foreach ($ownersList as $owner): ?>
								<tr>
									<td><?php echo isset($owner['id']) ? $owner['id'] : '--'; ?></td>
									<td><?php echo isset($owner['firstname']) ? $owner['firstname'].' '.$owner['lastname'] : '--'; ?></td>
									<td>
										<center>
											<button class="btn btn-sm btn-success btnAssignOwner" 
												data-ownerid="<?php echo isset($owner['id']) ? $owner['id'] : 0; ?>"
												data-ownername="<?php echo isset($owner['firstname']) ? $owner['firstname'].' '.$owner['lastname'] : '--'; ?>">
												ASSIGN
											</button>
										</center>
									</td>
								</tr>
							<?php endforeach ?>
							
						<?php else: ?>
							<tr>
								<td colspan="3"><center>No records found.</center><br></td>
							</tr>
						<?php endif ?>
					</table>
				</div>
			</div>

			<!-- Modal footer -->
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>

		</div>
	</div>
</div>

<script type="text/javascript">
	$('.btnAssignOwner').on('click', function(){
		var ownerid = $(this).data('ownerid');
		var	ownername = $(this).data('ownername');

		$('#mdl_owner_name').val(ownername);
		$('#mdl_owner_id').val(ownerid);
		
		$('#ownerList').modal('toggle');
	});
</script>