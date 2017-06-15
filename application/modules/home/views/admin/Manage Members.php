<?php
if(isset($_SESSION['Username'])){ 
if(!empty($querys)){
 ?>
 <h1 class="text-center">Manage Members</h1>
	    <div class="container">
	    	<div class="table-responsive">
	    		<table class="main-table text-center table table-bordered">
	    			<tr>
	    				<td>#ID</td>
	    				<td>Username</td>
	    				<td>Email</td>
	    				<td>Full Name</td>
	    				<td>Registerd Date</td>
	    				<td>Control</td>
	    			</tr>
	    			<?php
	    			foreach ( $querys as $row) {
	    				echo "<tr>";
	    				   echo "<td>" . $row['UserID'] . "</td>";
	    				   echo "<td>" . $row['Username'] . "</td>";
	    				   echo "<td>" . $row['Email'] . "</td>";
	    				   echo "<td>" . $row['FullName'] . "</td>";
	    				   echo "<td>" . $row['Date'] . "</td>";
	    				   ?>
	    				   <td>

	    				   
	    				           <a href='<?php echo base_url('home/Edit/'.$row['UserID'])?>'  class='btn btn-success'><i class='fa fa-edit'></i>Edit</a>
	    				           <a href='<?php echo base_url('home/Delete/'.$row['UserID'])?>' class='btn btn-danger confirm'><i class='fa fa-close'></i>Delete</a>
	    				           
	    				           <?php
	    				           if($row['RegStatus']==0){
									?>
	    				           	<a href='<?php echo base_url('home/Activate/'.$row['UserID'])?>' class='btn btn-info activate'><i class='fa fa-check'></i>Activate</a>
	    				           <?php	
	    				           }


	    				      echo "</td>";
	    				echo "</tr>";
	    			}
	    		 ?>  			
	    		</table>
	    	</div>
	    	<a href='<?php echo base_url('home/add') ?>' class="btn btn-primary"><i class="fa fa-plus"></i> New Member</a>
	    </div>
	    <?php
	      }else{
	      	echo "<div class='container'>";
	      		echo"<div class='nice-message'>There's No Members To Show</div>";
	      	echo "</div>";
	      }
      } 
	      ?>
		
