<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">	
	<base href="<?php echo $base_url; ?>" />
	
	<title><?=$this->e($title)?></title>
	<link rel="icon" type="image/ico" href="<?php echo base_url(ICON_DIR); ?>" />
	
	<meta name='author' content='GoEstate | Development Team'>
	<meta name='description' content="Finding your next home starts with GoEstate.com. We offer a next-level home search experience.Philippines's No.1 property site for real estate.">
	<meta property="og:type"            content="article" /> 
	<meta property="og:url"             content="http://goestate.com/" /> 
	<meta property="og:title"           content="GoEstate | Philippines's No.1 property site for real estate." /> 
	<meta property="og:image"           content="https://wall-street.com/wp-content/uploads/2018/01/jan-20-real-estate-top-pic.jpg" /> 
	<meta property="og:description"     content="Finding your next home starts with GoEstate.com. We offer a next-level home search experience.Philippines's No.1 property site for real estate." />

	<!-- css files -->
	<link href='<?php echo base_url('assets/css/bootstrap.min.css'); ?>' rel='stylesheet'>
	<link href='<?php echo base_url('assets/css/fontawesome-all.min.css'); ?>' rel='stylesheet'>

	<!-- js files -->
	<script src='<?php echo base_url('assets/js/jquery.min.js'); ?>'></script>
	<script src='<?php echo base_url('assets/js/bootstrap.min.js'); ?>'></script>
	<script src='<?php echo base_url('assets/js/main.js'); ?>'></script>
	<script src='<?php echo base_url('assets/js/numeral.min.js'); ?>'></script>
	<script src='<?php echo base_url('assets/js/price-format.js'); ?>'></script>


	<!-- <link href='<?php echo base_url('assets/css/alertify.css'); ?>' rel='stylesheet'> -->
	<!-- 
	<link href='<?php echo base_url('assets/css/bootstrap-datepicker.min.css'); ?>' rel='stylesheet'>
	
	<link href='<?php echo base_url('assets/css/jquery.growl.css'); ?>' rel='stylesheet'>
	<link href='<?php echo base_url('assets/css/css-stars.css'); ?>' rel='stylesheet'>
	<link href='<?php echo base_url('assets/css/fontawesome.min.css'); ?>' rel='stylesheet'>
	<link href='<?php echo base_url('assets/css/fontawesome-stars-o.css'); ?>' rel='stylesheet'>
	<link href='<?php echo base_url('assets/css/jquery.fancybox.min.css'); ?>' rel='stylesheet'>
	<link href='<?php echo base_url('assets/css/homepage.css'); ?>' rel='stylesheet'>
	<link href='<?php echo base_url('assets/css/sticky-footer-navbar.css'); ?>' rel='stylesheet'>

	
	<script src='<?php echo base_url('assets/js/moment.js'); ?>'></script>
	<script src='<?php echo base_url('assets/js/bootstrap-datetimepicker.min.js'); ?>'></script>
	
	<script src='<?php echo base_url('assets/js/jquery.growl.js'); ?>'></script> -->
	<!-- <script src='<?php echo base_url('assets/js/alertify.js'); ?>'></script> -->
	<!-- <script src='<?php echo base_url('assets/js/jquery.fancybox.min.js'); ?>'></script>
	<script src='<?php echo base_url('assets/js/main.js'); ?>'></script>
	<script src='<?php echo base_url('assets/js/jquery.barrating.min.js'); ?>'></script> -->
	

</head>
<body>
	<?php // Main content (from inner view, or nested layout) ?>
	<?=$this->section('content')?>

	<?php // Scripts at page end ?>
	<?=$this->section('scripts_foot')?>

	<script type="text/javascript">
		var	hasGrowl = <?php echo !empty($flashdata['growl']) ? true : 0; ?>;
		var	growlType = "<?php echo !empty($flashdata['growl']['type']) ? $flashdata['growl']['type'] : 'notice'; ?>";
		var	growlTitle = "<?php echo !empty($flashdata['growl']['title']) ? $flashdata['growl']['title'] : ''; ?>";
		var	growlMessage = "<?php echo !empty($flashdata['growl']['message']) ? $flashdata['growl']['message'] : ''; ?>";

		$(document).ready(function() {
			// $(window).on("scroll", function() {
			// 	if ($(window).scrollTop() >= 20) {
			// 		$(".navbar").addClass("compressed");
			// 	} else {
			// 		$(".navbar").removeClass("compressed");
			// 	}
			// });
			
			// $('input[name="contact_number"]').keydown(function (e) {
			// 	// Allow: backspace, delete, tab, escape, enter and .
			// 	if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
			// 		// Allow: Ctrl+A, Command+A
			// 		(e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
			// 		// Allow: Ctrl+C, Command+C
			// 		(e.keyCode === 67 && (e.ctrlKey === true || e.metaKey === true)) || 
			// 		// Allow: Ctrl+V, Command+V
			// 		(e.keyCode === 86 && (e.ctrlKey === true || e.metaKey === true)) ||  
			// 		// Allow: Ctrl+X, Command+X
			// 		(e.keyCode === 88 && (e.ctrlKey === true || e.metaKey === true)) || 
			// 		// Allow: home, end, left, right, down, up
			// 		(e.keyCode >= 35 && e.keyCode <= 40)) {
			// 		 // let it happen, don't do anything
			// 		 return;
			// 	}
			// 	// Ensure that it is a number and stop the keypress
			// 	if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
			// 		e.preventDefault();
			// 	}
			// });

			// $('.datetimepicker').datetimepicker({
			// 	format: 'YYYY-MM-DD',
			// });
			// $('.timepicker').datetimepicker({
			// 	format: 'HH:mm'
			// });
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
		});
	</script>
</body>
</html>