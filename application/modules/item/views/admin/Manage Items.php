<?php
	if(!empty($JOIN)){
 ?>
	    <h1 class="text-center">Manage Items</h1>
	    <div class="container">
	    	<div class="table-responsive">
	    		<table class="main-table text-center table table-bordered">
	    			<tr>
	    				<td>#ID</td>
	    				<td>Name</td>
	    				<td>Description</td>
	    				<td>Price</td>
	    				<td>Adding Date</td>
	    				<td>Category</td>
	    				<td>Username</td>
	    				<td>Control</td>
	    			</tr>
	    			<?php
	    			foreach ( $JOIN as $item) {
	    				echo "<tr>";
	    				   echo "<td>" . $item['Item_ID'] . "</td>";
	    				   echo "<td>" . $item['Name'] . "</td>";
	    				   echo "<td>" . $item['description'] . "</td>";
	    				   echo "<td>" . $item['Price'] . "</td>";
	    				   echo "<td>" . $item['Add_Date'] . "</td>";
	    				   echo "<td>" . $item['category_name'] . "</td>";
	    				   echo "<td>" . $item['Username'] . "</td>";
	    				   ?>
	    				  <td>

	    				           <a href='<?php echo base_url('item/Edit/'.$item['Item_ID'])?>' class='btn btn-success'><i class='fa fa-edit'></i>Edit</a>
	    				           <a href='items.php?do=Delete&itemid=" . $item['Item_ID'] . "' class='btn btn-danger confirm'><i class='fa fa-close'></i>Delete</a>
	    				           <?php
	    				           if($item['Approve']==0){
	    				           	?>
	    				           	<a href='items.php?do=Approve&itemid=" . $item['Item_ID'] . "' class='btn btn-info activate'><i class='fa fa-check'></i>Approve</a>
	    				           	<?php

	    				           }

	    				      echo "</td>";
	    				echo "</tr>";
	    			}

	    			?>
	    			
	    		</table>
	    	</div>
	    	<a href="<?php echo base_url('item/Add')?>" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> New Item</a>
	    </div>
	     <?php
	      }else{
	      	echo "<div class='container'>";
	      		echo"<div class='nice-message'>There's No Items To Show</div>";
	      		echo "<a href='items.php?do=Add' class='btn btn-sm btn-primary'>
	      				<i class='fa fa-plus'></i> New Item
	      			  </a>";
	      	echo "</div>";
	      } 
	      ?>
	   