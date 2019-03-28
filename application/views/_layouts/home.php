<?php $this->layout('layouts::base') ?>

	<?php $this->insert('partials::navbar') ?>
	<?=$this->section('content')?>

<!-- 
<?php if (!empty($enable_breadcrumb)): ?>
	<?php $this->insert('partials::breadcrumb') ?>
<?php endif ?> -->


<?php $this->insert('partials::modals') ?>