<h1 class="text-center">Edit Comment</h1>
			<div class="container">
				<form class="form-horizontal" action="<?php echo base_url('comment/Update') ?>" method="POST">
					<input type="hidden" name="comid" value=<?php echo $aha2; ?>/>
					<!--Start comment field  -->

					<div class="form-group form-group-lg">
						<label class="col-sm-2 control-label">Comment</label>
						<div class="col-md-6 col-sm-10 ">
							<?php  foreach ($lalal as $value) {} ?>
							<textarea class="form-control"name="comment"><?php echo $value['comment']?>  </textarea>	
						</div>
					</div>

					<!--End comment field  -->

					<!--Start submit field  -->

					<div class="form-group form-group-lg">
						<div class="col-sm-offset-2 col-sm-10">
							<input type="submit" value="save" class="btn btn-primary btn-lg"/>
						</div>
					</div>
					
					<!--End submit field  -->
		
				</form>
			</div>
		

					
					

