<?php $this->layout('layouts::base') ?>

<?php $this->insert('partials::navbar'); ?>


<?php $this->insert('partials::sidemenu'); ?>


<?php $this->insert('partials::modals'); ?>
<div class="container-fluid">
      <div class="row">
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        	<br>
	<!-- <h1 class="row mb-3">
		<div class="col"><?=$this->e($title)?></div>
		<div class="col text-right"></div>
	</h1> -->
			<!-- <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
				<h1 class="h2"><?=$this->e($title)?></h1>
			</div> -->
			<?=$this->section('content')?>
		</main>
	</div>
</div>
