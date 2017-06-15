<?php
if(!empty($JOIN)){
 ?>
 <h1 class="text-center">Manage Comments</h1>
	    <div class="container">
	    	<div class="table-responsive">
	    		<table class="main-table text-center table table-bordered">
	    			<tr>
	    				<td>ID</td>
	    				<td>Comment</td>
	    				<td>Item Name</td>
	    				<td>User Name</td>
	    				<td>Added Date</td>
	    				<td>Control</td>
	    			</tr>
	    			<?php
	    			foreach ( $JOIN as $row) {
	    				echo "<tr>";
	    				   echo "<td>" . $row['c_id'] . "</td>";
	    				   echo "<td>" . $row['comment'] . "</td>";
	    				   echo "<td>" . $row['Item_Name'] . "</td>";
	    				   echo "<td>" . $row['Member'] . "</td>";
	    				   echo "<td>" . $row['comment_date'] . "</td>";
	    				   ?>
	    				   <td>

	    				   
	    				           <a href='<?php echo base_url('comment/Edit/'.$row['c_id'])?>'  class='btn btn-success'><i class='fa fa-edit'></i>Edit</a>
	    				           <a href='<?php echo base_url('comment/Delete/'.$row['c_id'])?>' class='btn btn-danger confirm'><i class='fa fa-close'></i>Delete</a>
	    				           
	    				           <?php
	    				           if($row['status']==0){
									?>
	    				           	<a href='<?php echo base_url('comment/Approve/'.$row['c_id'])?>' class='btn btn-info activate'><i class='fa fa-check'></i>Approve</a>
	    				           <?php	
	    				           }


	    				      echo "</td>";
	    				echo "</tr>";
	    			}
	    		 ?>  			
	    		</table>
	    	</div>
	    </div>
	    <?php
	      }else{
	      	echo "<div class='container'>";
	      		echo"<div class='nice-message'>There's No Comments To Show</div>";
	      		echo "<a href='<?php echo base_url('home/Add')?>' class='btn btn-primary'>
	      				<i class='fa fa-plus'></i> New Member
	      			  </a>";
	      	echo "</div>";
	      }
      
	      ?>
		
