<?php $this->layout('layouts::default'); ?>

<div class="row">
	<div class="col-6">
		<form>
			<div class="row">
				<div class="col-12">
					<div class="form-group">
						<label for="email" class="control-label">Youtube Link</label>
						<input class="form-control" name="youtube_video" type="text" value="<?php echo isset($property->youtube_link) ? $property->youtube_link : ''; ?>">
					</div>
					<div class="embed-responsive embed-responsive-16by9">
						<?php echo !empty($property->youtube_video) ? $property->youtube_video : '--'; ?>
					</div><br>
					
					<div class="form-group">
						<label for="email" class="control-label">Post Title</label>
						<input class="form-control" name="post_title" type="text" value="<?php echo isset($property->post_title) ? $property->post_title : ''; ?>" id="email">
					</div>

					<div class="form-group">
						<label for="username" class="control-label">Address</label>
						<textarea class="form-control" name="additional_details"><?php echo isset($property->address) ? $property->address : ''; ?></textarea>
					</div>
					<div class="form-group">
						<label for="username" class="control-label">Additional Details</label>
						<textarea class="form-control" name="additional_details"><?php echo isset($property->additional_details) ? $property->additional_details : ''; ?></textarea>
					</div>
					<div class="form-group">
						<label for="email" class="control-label">Price</label>
						<input class="form-control" name="post_title" type="text" value="<?php echo isset($property->price) ? $property->price : ''; ?>" id="email">
					</div>
				</div>
			</div>
		</form>
	</div>

	<div class="col-6">
		<form>
			<div class="row">
				<div class="col-12">
					<div class="row">
						<div class="col">
							<div class="form-group">
								<label class="control-label">Transaction Type </label>
								<select name="transaction_type" class="form-control">
									<?php $ttype_options = unserialize(TRANSACTION_TYPE_SELECTION); ?>
									<?php array_shift($ttype_options); ?>
									<?php foreach ($ttype_options as $key => $value): ?>
										<?php if (isset($property->transaction_type) && $property->transaction_type == $key): ?>
											<option value="<?php echo $key; ?>" selected><?php echo $value; ?></option>
										<?php else: ?>
											<option value="<?php echo $key; ?>"><?php echo $value; ?></option>
										<?php endif ?>
									<?php endforeach ?>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="form-group">
								<label class="control-label">Property Type</label>
								<select name="property_type" class="form-control">
									<?php $ttype_options = unserialize(PROPERTY_TYPE_SELECTION); ?>
									<?php array_shift($ttype_options); ?>
									<?php foreach ($ttype_options as $key => $value): ?>
										<?php if (isset($property->property_type) && $property->property_type == $key): ?>
											<option value="<?php echo $key; ?>" selected><?php echo $value; ?></option>
										<?php else: ?>
											<option value="<?php echo $key; ?>"><?php echo $value; ?></option>
										<?php endif ?>
									<?php endforeach ?>
								</select>
							</div>
							<div class="form-group" id="pTypeText">
								<input  type="ptype_text" class="form-control" name="ptype_text" value="<?php echo isset($property->property_type) ? $property->property_type : '';?>">
							</div>	
						</div>
					</div>

					
					<div class="form-group">
						<label for="address" class="control-label">Property Size</label>
						<input class="form-control" name="property_size" type="text" value="<?php echo isset($property->property_size) ? $property->property_size : ''; ?>">
					</div>
					<div class="form-group">
						<label for="email" class="control-label">Bedroom Count</label>
						<input class="form-control" name="bedroom_count" type="text" value="<?php echo isset($property->bedroom_count) ? $property->bedroom_count : ''; ?>">
					</div>
					<div class="form-group">
						<label for="email" class="control-label">Bathroom Count</label>
						<input class="form-control" name="bathroom_count" type="text" value="<?php echo isset($property->bathroom_count) ? $property->bathroom_count : ''; ?>">
					</div>
					<div class="form-group">
						<label for="email" class="control-label">Storey Count</label>
						<input class="form-control" name="storey_count" type="text" value="<?php echo isset($property->storey_count) ? $property->storey_count : ''; ?>">
					</div>
					<div class="row">
						<div class="col">
							<div class="form-group">
								<label class="form-controlol-label">Property Condition</label>
								<select name="property_condition" class="form-control">
									<?php $pcond = unserialize(PROPERTY_CONDITION_SELECTION); ?>
									<?php array_shift($pcond); ?>
									<?php foreach ($pcond as $key => $value): ?>
										<?php if (isset($property->property_condition) && $property->property_condition == $key): ?>
											<option value="<?php echo $key; ?>" selected><?php echo $value; ?></option>
										<?php else: ?>
											<option value="<?php echo $key; ?>"><?php echo $value; ?></option>
										<?php endif ?>
									<?php endforeach ?>
								</select>
							</div>
							<div class="form-group" id="pTypeText">
								<input  type="ptype_text" class="form-control" name="ptype_text" value="<?php echo isset($property->property_condition) ? $property->property_condition : '';?>">
							</div>	
						</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="form-group">
								<label class="control-label">Is Sold</label>
								<select name="is_sold" class="form-control">
									<?php $issold = unserialize(IS_SOLD_SELECTION); ?>
									<?php array_shift($issold); ?>
									<?php foreach ($issold as $key => $value): ?>
										<?php if (isset($property->is_sold) && $property->is_sold == $key): ?>
											<option value="<?php echo $key; ?>" selected><?php echo $value; ?></option>
										<?php else: ?>
											<option value="<?php echo $key; ?>"><?php echo $value; ?></option>
										<?php endif ?>
									<?php endforeach ?>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="form-group">
								<label class="control-label">Post Status</label>
								<select name="post_status" class="form-control">
									<?php $options = unserialize(POST_STATUS_SELECTION); ?>
									<?php array_shift($options); ?>
									<?php foreach ($options as $key => $value): ?>
										<?php if (isset($property->post_status) && $property->post_status == $key): ?>
											<option value="<?php echo $key; ?>" selected><?php echo $value; ?></option>
										<?php else: ?>
											<option value="<?php echo $key; ?>"><?php echo $value; ?></option>
										<?php endif ?>
									<?php endforeach ?>
								</select>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label for="username" class="control-label">Post Status Remarks</label>
						<textarea class="form-control" name="post_status_remarks"><?php echo isset($property->post_status_remarks) ? $property->post_status_remarks : ''; ?></textarea>
					</div>
					
				</div>
			</div>
			<hr>
			<button type="submit" class="btn btn-primary" id="updBtn">Save</button>
		</form>
	</div>
</div>

<script type="text/javascript">
	toggleInput();
	$('select[name="property_type"]').on('change', function(){
		toggleInput();	
	})
	function toggleInput(){
		selectVal = $('select[name="property_type"]').val();
		if (selectVal == 'others') {
			$('#pTypeText').show();
		} else {
			$('#pTypeText').hide();
		}

	}

	$('#updBtn').on('click', function(e){
		e.preventDefault();

		var response = confirm('Update information?');
		if (response) {
			$('form').submit();
		};
	});
</script>