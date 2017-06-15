<h1 class="text-center">Edit Item</h1>
		<div class="container">
			<form class="form-horizontal" action="<?php echo base_url('item/Update') ?>" method="POST">
				<?php foreach ($itemes as $item) { }?>
				<input type="hidden" name="itemid" value="<?php echo $itemid ?>"/>

				<!--Start Name field  -->

				<div class="form-group form-group-lg">
					<label class="col-sm-2 control-label">Name</label>
					<div class="col-md-6 col-sm-10 ">
						<input type="text" name="name" class="form-control" placeholder="Name Of The Item" value="<?php echo $item['Name'] ?>" />
					</div>
				</div>

				<!--End Name field  -->

				<!--Start Description field  -->

				<div class="form-group form-group-lg">
					<label class="col-sm-2 control-label">Description</label>
					<div class="col-md-6 col-sm-10 ">
						<input type="text" name="description" class="form-control" 
						placeholder="Description Of The Item" value="<?php echo $item['description'] ?>" />
					</div>
				</div>

				<!--End Description field  -->

				<!--Start Price field  -->

				<div class="form-group form-group-lg">
					<label class="col-sm-2 control-label">Price</label>
					<div class="col-md-6 col-sm-10 ">
						<input type="text" name="price" class="form-control" 
						placeholder="Price Of The Item" value="<?php echo $item['Price'] ?>" />
					</div>
				</div>

				<!--End Price field  -->

				<!--Start Country field  -->

				<div class="form-group form-group-lg">
					<label class="col-sm-2 control-label">Country</label>
					<div class="col-md-6 col-sm-10 ">
						<input type="text" name="country" class="form-control" 
						placeholder="Country Of Made" value="<?php echo $item['Country_Made'] ?>" />
					</div>
				</div>

				<!--End Country field  -->

				<!--Start Status field  -->

				<div class="form-group form-group-lg">
					<label class="col-sm-2 control-label">Status</label>
					<div class="col-md-6 col-sm-10 ">
						<select name="status">
							<option value="1" <?php if($item['Status']==1){echo 'selected';} ?> >New</option>
							<option value="2" <?php if($item['Status']==2){echo 'selected';} ?> >Like New</option>
							<option value="3" <?php if($item['Status']==3){echo 'selected';} ?> >Used</option>
							<option value="4" <?php if($item['Status']==4){echo 'selected';} ?> >Very Old</option>
						</select>
					</div>
				</div>

				<!--End Status field  -->


				<!--Start members field  -->

				<div class="form-group form-group-lg">
					<label class="col-sm-2 control-label">Member</label>
					<div class="col-md-6 col-sm-10 ">
						<select name="member">
							<?php
								$users = modules::run('item/Edit2');
								foreach ($users as $user) {
									echo "<option value='" . $user['UserID'] . "' ";//<?php
									 if($item['Member_ID']==$user['UserID']){echo 'selected';}
									 echo">" . $user['Username']  . "</option>";
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
							<?php
								$cats = modules::run('item/Edit3');
								foreach ($cats as $cat) {
									echo "<option value='" . $cat['ID'] . "'";
									if($item['Cat_ID']==$cat['ID']){echo 'selected';}
									echo ">" . $cat['Name']  . "</option>";
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
						class="form-control" placeholder="Separate Tags With comma(,)" 
						value="<?php echo $item['tags'] ?>"/>
					</div>
				</div>

				<!--End Tags field  -->

				<!--Start submit field  -->

				<div class="form-group form-group-lg">
					<div class="col-sm-offset-2 col-sm-10">
						<input type="submit" value="Save Item" class="btn btn-primary btn-lg"/>
					</div>
				</div>
					
				<!--End submit field  -->
		
			</form>
			
		</div>
