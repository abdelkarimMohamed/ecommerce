<h1 class="text-center">Edit Member</h1>
			<div class="container">
				<form class="form-horizontal" action="<?php echo base_url('home/Update') ?>" method="POST">
					<input type="hidden" name="userid" value=<?php echo $aha2; ?>/>

					<!--Start username field  -->

					<div class="form-group form-group-lg">
						<label class="col-sm-2 control-label">Username</label>
						<div class="col-md-6 col-sm-10 ">
							<?php
							foreach ($aha as $value) {
							}
							
							?>
							<input type="text" name="username" class="form-control" value="<?php echo $value['Username']; ?>" autocomplete="off" required="required" />
						</div>
					</div>

					<!--End username field  -->

					<!--Start password field  -->

					<div class="form-group form-group-lg">
						<label class="col-sm-2 control-label">Password</label>
						<div class="col-md-6 col-sm-10">
							<input type="hidden" name="oldpassword" value="<?php echo $value['Password']; ?>"/>
							<input type="password" name="newpassword" class="form-control" autocomplete="new-password" placeholder="Leave Blank If You don't Want To Change"/>
						</div>
					</div>

					<!--End password field  -->

					<!--Start Email field  -->

					<div class="form-group form-group-lg">
						<label class="col-sm-2 control-label">Email</label>
						<div class="col-md-6 col-sm-10">
							<input type="email" name="email" value="<?php echo $value['Email']; ?>" class="form-control" required="required" />
						</div>
					</div>
					
					<!--End Email field  -->

					<!--Start Full Name field  -->

					<div class="form-group form-group-lg">
						<label class="col-sm-2 control-label">Full Name</label>
						<div class="col-md-6 col-sm-10">
							<input type="text" name="full" value='<?php echo $value['FullName']; ?>' class="form-control" required="required" />
						</div>
					</div>
					
					<!--End Full Name field  -->

					<!--Start submit field  -->

					<div class="form-group form-group-lg">
						<div class="col-sm-offset-2 col-sm-10">
							<input type="submit" value="save" class="btn btn-primary btn-lg"/>
						</div>
					</div>
					
					<!--End submit field  -->
		
				</form>
			</div>