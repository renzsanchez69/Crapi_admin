<!DOCTYPE html>
<html lang="en">
<head>
	<base href="<?php echo $base_url; ?>" />
	<title><?=$this->e($title)?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">	
	<meta name='author' content='2CEBU'>
	<meta name='description' content='2CEBU'>

	<!-- source ****
	-- https://getbootstrap.com/docs/4.1/examples/dashboard/# -->

	<link href='<?php echo base_url('assets/css/bootstrap.min.css'); ?>' rel='stylesheet'>
	<link href='<?php echo base_url('assets/css/fontawesome.min.css'); ?>' rel='stylesheet'>
	<link href='<?php echo base_url('assets/css/admin/dashboard.css'); ?>' rel='stylesheet'>
	<link href='<?php echo base_url('assets/css/admin/custom.css'); ?>' rel='stylesheet'>


	<!--<![endif]-->
	<script src='<?php echo base_url('assets/js/jquery.min.js'); ?>'></script>
	<script src='<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>'></script>
	<!-- <script src='<?php echo base_url('assets/js/jquery.growl.js'); ?>'></script>
	<script src='<?php echo asset_url('js/moment.js'); ?>'></script>
	<script src='<?php echo asset_url('js/bootstrap-datetimepicker.min.js'); ?>'></script>
	<script src='<?php echo base_url('assets/js/select2.full.min.js'); ?>') }}"></script>
 -->
</head>
<body class="<?php echo $body_class; ?>" id="<?php echo isset($body_id) ? $body_id : ''; ?>">
	<?=$this->section('content')?>

	<?php // Scripts at page end ?>
	<?=$this->section('scripts_foot')?>

	<script type="text/javascript">
		var	hasGrowl = <?php echo !empty($flashdata['growl']) ? true : 0; ?>;
		var	growlType = "<?php echo !empty($flashdata['growl']['type']) ? $flashdata['growl']['type'] : 'notice'; ?>";
		var	growlTitle = "<?php echo !empty($flashdata['growl']['title']) ? $flashdata['growl']['title'] : ''; ?>";
		var	growlMessage = "<?php echo !empty($flashdata['growl']['message']) ? $flashdata['growl']['message'] : ''; ?>";

		$(function () {
			$('.datetimepicker').datetimepicker({
				format: 'YYYY-MM-DD'
			});
			$('input[type="number"]').keydown(function (e) {
				// Allow: backspace, delete, tab, escape, enter and .
				if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
					// Allow: Ctrl+A, Command+A
					(e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
					// Allow: Ctrl+C, Command+C
					(e.keyCode === 67 && (e.ctrlKey === true || e.metaKey === true)) || 
					// Allow: Ctrl+V, Command+V
					(e.keyCode === 86 && (e.ctrlKey === true || e.metaKey === true)) ||  
					// Allow: Ctrl+X, Command+X
					(e.keyCode === 88 && (e.ctrlKey === true || e.metaKey === true)) || 
					// Allow: home, end, left, right, down, up
					(e.keyCode >= 35 && e.keyCode <= 40)) {
					 // let it happen, don't do anything
					 return;
				}
				// Ensure that it is a number and stop the keypress
				if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
					e.preventDefault();
				}
			});
		});

	    if (growlTitle && growlMessage) {
    		switch (growlType) {
				case 'notice':
					$.growl.notice({title: growlTitle, location:'br', message: growlMessage });
					break;
				case 'error':
					$.growl.error({title: growlTitle, location:'br', message: growlMessage });
					break;
				case 'warning':
					$.growl.warning({title: growlTitle, location:'br', message: growlMessage });
					break;
				default:
					$.growl.notice({title: growlTitle, location:'br', message: growlMessage });
					break;
			}
			
		}
	</script>
	<script src='<?php echo base_url('assets/js/main.js'); ?>'></script>
	<script src='<?php echo base_url('assets/js/admin/feather.min.js'); ?>'></script>
	<script>
      feather.replace()
    </script>

</body>

</html>