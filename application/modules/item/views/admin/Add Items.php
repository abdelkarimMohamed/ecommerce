<h1 class="text-center">Add New Item</h1>
		<div class="container">
			<form class="form-horizontal" action="<?php echo base_url('item/Insert') ?>" method="POST">

				<!--Start Name field  -->

				<div class="form-group form-group-lg">
					<label class="col-sm-2 control-label">Name</label>
					<div class="col-md-6 col-sm-10 ">
						<input type="text" name="name" class="form-control" placeholder="Name Of The Item" />
					</div>
				</div>

				<!--End Name field  -->

				<!--Start Description field  -->

				<div class="form-group form-group-lg">
					<label class="col-sm-2 control-label">Description</label>
					<div class="col-md-6 col-sm-10 ">
						<input type="text" name="description" class="form-control" placeholder="Description Of The Item" />
					</div>
				</div>

				<!--End Description field  -->

				<!--Start Price field  -->

				<div class="form-group form-group-lg">
					<label class="col-sm-2 control-label">Price</label>
					<div class="col-md-6 col-sm-10 ">
						<input type="text" name="price" class="form-control" placeholder="Price Of The Item" />
					</div>
				</div>

				<!--End Price field  -->

				<!--Start Country field  -->

				<div class="form-group form-group-lg">
					<label class="col-sm-2 control-label">Country</label>
					<div class="col-md-6 col-sm-10 ">
						<input type="text" name="country" class="form-control" placeholder="Country Of Made" />
					</div>
				</div>

				<!--End Country field  -->

				<!--Start Status field  -->

				<div class="form-group form-group-lg">
					<label class="col-sm-2 control-label">Status</label>
					<div class="col-md-6 col-sm-10 ">
						<select name="status">
							<option value="0"> </option>
							<option value="1">New</option>
							<option value="2">Like New</option>
							<option value="3">Used</option>
							<option value="4">Very Old</option>
						</select>
					</div>
				</div>

				<!--End Status field  -->


				<!--Start members field  -->

				<div class="form-group form-group-lg">
					<label class="col-sm-2 control-label">Member</label>
					<div class="col-md-6 col-sm-10 ">
						<select name="member">
							<option value="0"> </option>
							<?php
								foreach ($allMembers as $user) {
									echo "<option value='" . $user['UserID'] . "'>" . $user['Username']  . "</option>";
								}
							?>
						</select>
					</div>
				</div>

				<!--End members field  -->

				<!--Start Categories field  -->

				<div class="form-group form-group-lg">
					<label class="col-sm-2 control-label">Category</label>
					<div class="col-md-6 col-sm-10 ">
						<select name="category">
							<option value="0"> </option>
							<?php
								foreach ($allCats as $cat) {
									echo "<option value='" . $cat['ID'] . "'>" . $cat['Name']  . "</option>";
									//childCats($cat['ID']);
									//$ss=$childCats($cat['ID']);
									//$childCats=getAllFrom("*", "categories", "WHERE parent = {$cat['ID']}","", "ID");
									$childCatss = modules::run('item/Add2',$cat['ID'] );
									//var_dump($childCats); die();
									foreach ($childCatss as $child) {
										echo "<option value='" . $child['ID'] . "'>---" . $child['Name']  .  "</option>";
									}
								}
							?>
						</select>
					</div>
				</div>

				<!--End Categories field  -->

				<!--Start Tags field  -->

				<div class="form-group form-group-lg">
					<label class="col-sm-2 control-label">Tags</label>
					<div class="col-md-6 col-sm-10 ">
						<input type="text" name="tags" 
						class="form-control" placeholder="Separate Tags With comma(,)" />
					</div>
				</div>

				<!--End Tags field  -->

				<!--Start submit field  -->

				<div class="form-group form-group-lg">
					<div class="col-sm-offset-2 col-sm-10">
						<input type="submit" value="Add Item" class="btn btn-primary btn-lg"/>
					</div>
				</div>
					
				<!--End submit field  -->
		
			</form>
		</div>