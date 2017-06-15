<?php
if(isset($_SESSION['Username'])){ 
	$numUsers=7;
	$numItems=6;
	$numComments=4;
?>
<div class="home-stats">
		<div class="container text-center">
			<h1>Dashboard</h1>
			<div class="row">
				<div class="col-md-3">
					<div class="stat st-members">
						<i class="fa fa-users"></i>
						<div class="info">
							Total Members

							<span><a href="<?php echo base_url('home/Manage') ?>"> <?php echo $countItemsusers; ?>  </a></span>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="stat st-pending">
						<i class="fa fa-user-plus"></i>
						<div class="info">
							Pending Members
						     <!--
						     <?php
								$this->uri->segment(3, 0);
							 ?>
							-->
							<span><a href="<?php echo base_url('home/Manage/1') ?>"> <?php echo $checkItem; ?> </a></span>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="stat st-items">
						<i class="fa fa-tag"></i>
						<div class="info">
							Total Items
							<span><a href="<?php echo base_url('item/Manage') ?>"> <?php echo $countItemsitems ?> </a> </span>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="stat st-comments">
						<i class="fa fa-comments"></i>
						<div class="info">
							Total Comments
							<span><a href="<?php echo base_url('comment/Manage') ?>"> <?php 	echo $countItemscomments; 	?>  </a></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="latest">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							<i class="fa fa-users"></i>
							 Latest <?php  echo $numUsers;  ?>  Registerd Users
							 <span class="toggle-info pull-right">
							 	<i class="fa fa-plus fa-lg"></i>
							 </span>
						</div>
						<div class="panel-body">
							<ul class="list-unstyled latest-users">
								<?php
								if(!empty($getLatestuser)){ 
									foreach ($getLatestuser as $user) {

									echo "<li>" ;
										echo $user['Username'];
										?>
										<a href="<?php echo base_url('home/Edit/'.$user['UserID']);?>">
											<?php
											echo "<span class='btn btn-success pull-right'>";
												echo '<i class="fa fa-edit"></i> Edit';
												if($user['RegStatus']==0){
		    				           				echo "<a href='members.php?do=Activate&userid=" . $user['UserID'] . "' class='btn btn-info pull-right activate'><i class='fa fa-check'></i>Activate</a>";
		    				          			}
											echo "</span>";
										echo '</a>';
									echo "</li>";
									}
								}else{
									echo"There Is No Members To Show";
								}
							?>
							</ul>
						</div>

					</div>
				</div>
				<div class="col-sm-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							<i class="fa fa-tag"></i>
							 Latest <?php echo $numItems; ?> Items
							<span class="toggle-info pull-right">
							 	<i class="fa fa-plus fa-lg"></i>
							</span>
						</div>
						<div class="panel-body">
							<ul class="list-unstyled latest-users">
								<?php
									if(!empty($getLatestitem)){  
										foreach ($getLatestitem as $item) {
										echo "<li>" ;
											echo $item['Name'];
											?>
											<a href="<?php echo base_url('item/Edit/'.$item['Item_ID']);?>">
												<?php
												echo "<span class='btn btn-success pull-right'>";
													echo '<i class="fa fa-edit"></i> Edit';
													if($item['Approve']==0){
			    				           				echo "<a href='items.php?do=Approve&itemid=" . $item['Item_ID'] . "' class='btn btn-info pull-right activate'><i class='fa fa-check'></i>Approve</a>";
			    				          			}
												echo "</span>";
											echo '</a>';
										echo "</li>";
										}
									}else{
											echo"There Is No Items To Show";
										}
								?>					
							
							</ul>
						</div>

					</div>
				</div>
			</div>
			<!-- Start Latest Comments  -->
			<div class="row">
				<div class="col-sm-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							<i class="fa fa-comments-o"></i>
							 Latest <?php echo $numComments ?>  Comments
							 <span class="toggle-info pull-right">
							 	<i class="fa fa-plus fa-lg"></i>
							 </span>
						</div>
						<div class="panel-body">
							<?php
							if(!empty($join)){  

									foreach ($join as $comment) {
										echo "<div class='comment-box'>";
											echo '<span class="member-n">';
							?> 
											
											<a href="<?php echo base_url('home/Edit/'. $comment['user_id'])?>">
							<?php
											echo  '  ' .$comment['Member']. '</a></span>';
											 echo "<p class='member-c'>" . $comment['comment'] . "</p>";
										echo "</div>";
									}
								}else{
									echo"There Is No Comments To Show";
								}
							?>
							
						</div>

					</div>
				</div>
			</div>
			<!-- End Latest Comments  -->
		</div>
	</div>
	<?php
		}else{
			redirect('admin/login');
		}
	?>
