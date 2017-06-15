
<h1 class='text-center'>Insert Items</h1>
    <div class='container'>
    	<?php if($error=='' ){ ?>
						<div class='alert alert-success'> 1 Record Inserted</div>
		<?php 
			}else{
								
			
		?>
			 	  <?php echo $error; ?>  
			 	
		<?php
			// }
		} 
		?>
    	
    </div>