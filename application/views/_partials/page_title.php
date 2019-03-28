<div class="row align-items-center">
	<div class="col">
		<h3 class="mt-3 mb-3 text-primary">

			<!-- Title icon -->
			<?php switch($ctrler): 
					case 'mortgagecalculator': ?>
					<i class="fa fa-calculator"></i> 
					<?php break; ?>

				<?php case 'compare': ?>
					<i class="fa fa-building"></i> 
					<?php break; ?>
			<?php endswitch; ?>	


			<?php echo $title; ?>


		</h3>
	</div>
	<?php if ($ctrler == 'compare'): ?>
		<div class="col text-right align-content-middle">
			<form method="POST" action="http://127.0.0.1:8000/compare-property/clear" accept-charset="UTF-8" class="ajax"><input name="_token" type="hidden" value="VxSx1UZpGhlquKbHIg1Ql7J51t3TgO8TCErVDi9n">
				 <button class="btn btn-info" type="submit"><i class="fas fa-times"></i> Clear comparison list</button>
			</form>
		</div>
	<?php endif ?>
</div>