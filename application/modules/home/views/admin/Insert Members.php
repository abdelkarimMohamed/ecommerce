 <h1 class='text-center'>Insert Member</h1>
    <div class='container'>
    	<?php if($aha=='' ){ ?>
		
		<?php }else{ ?>
			<div class='alert alert-danger'>  <?php echo $aha; ?>  </div>
		<?php } ?>

		<?php if($check==1){ ?>

		<div class='alert alert-danger'> Sorry this user is Exist </div>
		<?php }?>
		<?php if($check!=1 && $aha==''){ ?>
		<div class='alert alert-success'> 1 Record Inserted</div>
		<?php } ?>
	</div>
