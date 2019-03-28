<?php $this->layout('layouts::base') ?>

<div class="container">
	<?php $this->insert('partials::navbar') ?>
	<?php $this->insert('partials::page_title') ?>
	<?=$this->section('content')?>
</div>


<!-- <div class="footer">
	<div class="container-fluid">
		<?php if (ENVIRONMENT=='development'): ?>
			<p class="pull-right text-muted">
				CI Version: <strong><?php echo CI_VERSION; ?></strong>, 
				Elapsed Time: <strong>{elapsed_time}</strong> seconds, 
				Memory Usage: <strong>{memory_usage}</strong>
			</p>
		<?php endif; ?>
		<p class="text-muted">&copy; 2018 All rights reserved.</p>
	</div>
</div> -->

<footer class="footer">
	<div class="container">
		<!-- <?php if (ENVIRONMENT=='development'): ?>
			<p class="pull-right text-muted">
				CI Version: <strong><?php echo CI_VERSION; ?></strong>, 
				Elapsed Time: <strong>{elapsed_time}</strong> seconds, 
				Memory Usage: <strong>{memory_usage}</strong>
			</p>
		<?php endif; ?> -->
		<span class="text-muted">&copy; 2018 All rights reserved.</span>
	</div>
</footer>


<?php $this->insert('partials::modals') ?>