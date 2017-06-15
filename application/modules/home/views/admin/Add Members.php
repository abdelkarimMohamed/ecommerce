<h1 class="text-center">Add New Member</h1>
			<div class="container">
				<form class="form-horizontal" action="<?php echo base_url('home/Insert') ?>" method="POST">

					<!--Start username field  -->

					<div class="form-group form-group-lg">
						<label class="col-sm-2 control-label">Username</label>
						<div class="col-md-6 col-sm-10 ">
							<input type="text" name="username" class="form-control" autocomplete="off" required="required" placeholder="Username TO Login Into shop" />
						</div>
					</div>

					<!--End username field  -->

					<!--Start password field  -->

					<div class="form-group form-group-lg">
						<label class="col-sm-2 control-label">Password</label>
						<div class="col-md-6 col-sm-10">
							<input type="password" name="password" class="password form-control" autocomplete="new-password" required="required" placeholder="Password Must Be Hard & Complex"/>
							<i class="show-pass fa fa-eye fa-2x"></i>
						</div>
					</div>

					<!--End password field  -->

					<!--Start Email field  -->

					<div class="form-group form-group-lg">
						<label class="col-sm-2 control-label">Email</label>
						<div class="col-md-6 col-sm-10">
							<input type="email" name="email" class="form-control" required="required" placeholder="Email Must Be Valid"/>
						</div>
					</div>
					
					<!--End Email field  -->

					<!--Start Full Name field  -->

					<div class="form-group form-group-lg">
						<label class="col-sm-2 control-label">Full Name</label>
						<div class="col-md-6 col-sm-10">
							<input type="text" name="full" class="form-control" required="required" placeholder="Full Name Appear In Your Profile Page" />
						</div>
					</div>
					
					<!--End Full Name field  -->

					<!--Start submit field  -->

					<div class="form-group form-group-lg">
						<div class="col-sm-offset-2 col-sm-10">
							<input type="submit" name="submit" value="Add Member" class="btn btn-primary btn-lg"/>
						</div>
					</div>
					
					<!--End submit field  -->
		
				</form>
			</div>;